<?php

namespace App\Imports;

use App\Models\Tesis;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class TesisImport
{
    private const HEADER_SCAN_ROWS = 12;
    private const LEGACY_DATA_START_ROW = 5;
    private const MAX_IMPORT_COLUMNS = 80;

    public $created = 0;
    public $updated = 0;
    public $unchanged = 0;
    public $skipped = 0;
    public $hidden = 0;

    public function import(UploadedFile $file): void
    {
        $reader = IOFactory::createReaderForFile($file->getRealPath());
        $reader->setReadDataOnly(true);
        $reader->setReadFilter(new TesisImportReadFilter(self::MAX_IMPORT_COLUMNS));

        $spreadsheet = $reader->load($file->getRealPath());
        $sheet = $spreadsheet->getSheet(0);
        $highestDataRow = $sheet->getHighestDataRow();
        $highestDataColumn = min(
            Coordinate::columnIndexFromString($sheet->getHighestDataColumn()),
            self::MAX_IMPORT_COLUMNS
        );
        $headers = $this->findHeaderMap($sheet, $highestDataRow, $highestDataColumn);
        $startRow = $headers !== null ? $headers['row'] + 1 : self::LEGACY_DATA_START_ROW;

        for ($excelRow = $startRow; $excelRow <= $highestDataRow; $excelRow++) {
            if (! $sheet->getRowDimension($excelRow)->getVisible()) {
                $this->hidden++;
                continue;
            }

            $row = $this->readRow($sheet, $excelRow, $highestDataColumn);

            if ($this->isEmptyRow($row)) {
                continue;
            }

            $data = $headers !== null
                ? $this->mapRowFromHeaders($row, $headers['columns'])
                : $this->mapLegacyRow($row);

            if ($data === null) {
                $this->skipped++;
                continue;
            }

            $this->storeRow($data);
        }
    }

    private function mapLegacyRow(array $row): ?array
    {
        $alumno = $this->cleanText($row[3] ?? null);
        $tema = $this->cleanText($row[21] ?? null);
        $director = $this->cleanText($row[23] ?? null);
        $area = $this->cleanText($row[16] ?? null);
        $cveUaslp = $this->cleanCode($row[2] ?? null);
        $anio = $this->extractYear($row[19] ?? null);

        return $this->buildData([
            'cve_uaslp' => $cveUaslp,
            'programa' => 'Doctorado en Ciencias Ambientales',
            'area' => $area,
            'anio' => $anio,
            'alumno' => $alumno,
            'tema' => $tema,
            'director' => $director,
            'url' => null,
        ]);
    }

    private function mapRowFromHeaders(array $row, array $columns): ?array
    {
        return $this->buildData([
            'cve_uaslp' => $this->cleanCode($row[$columns['cve_uaslp']] ?? null),
            'programa' => $this->cleanText($row[$columns['programa']] ?? null) ?: 'Doctorado en Ciencias Ambientales',
            'area' => $this->cleanText($row[$columns['area']] ?? null),
            'anio' => $this->extractYear($row[$columns['anio']] ?? null),
            'alumno' => $this->cleanText($row[$columns['alumno']] ?? null),
            'tema' => $this->cleanText($row[$columns['tema']] ?? null),
            'director' => $this->cleanText($row[$columns['director']] ?? null),
            'url' => $this->cleanText($row[$columns['url']] ?? null),
        ]);
    }

    private function buildData(array $data): ?array
    {
        if (
            empty($data['programa'])
            || empty($data['alumno'])
            || empty($data['tema'])
            || empty($data['director'])
            || empty($data['anio'])
        ) {
            return null;
        }

        if (! $this->isValidYear((int) $data['anio'])) {
            return null;
        }

        $data['tesisDirector'] = $data['director'];

        return $data;
    }

    private function findHeaderMap($sheet, int $highestRow, int $highestColumn): ?array
    {
        $scanRows = min($highestRow, self::HEADER_SCAN_ROWS);

        for ($rowNumber = 1; $rowNumber <= $scanRows; $rowNumber++) {
            $row = $this->readRow($sheet, $rowNumber, $highestColumn);
            $columns = [];

            foreach ($row as $index => $value) {
                $field = $this->fieldForHeader($value);

                if ($field !== null) {
                    $columns[$field] = $index;
                }
            }

            foreach (['alumno', 'area', 'anio', 'tema', 'director'] as $requiredField) {
                if (! array_key_exists($requiredField, $columns)) {
                    continue 2;
                }
            }

            return [
                'row' => $rowNumber,
                'columns' => $columns,
            ];
        }

        return null;
    }

    private function fieldForHeader($value): ?string
    {
        $header = $this->normalizeHeader($value);

        $map = [
            'cve uaslp' => 'cve_uaslp',
            'clave uaslp' => 'cve_uaslp',
            'clave' => 'cve_uaslp',
            'rpe' => 'cve_uaslp',
            'programa' => 'programa',
            'programa academico' => 'programa',
            'nivel' => 'programa',
            'nombre completo' => 'alumno',
            'alumno' => 'alumno',
            'estudiante' => 'alumno',
            'nombre alumno' => 'alumno',
            'area' => 'area',
            'linea' => 'area',
            'area academica' => 'area',
            'fecha obtencion de grado' => 'anio',
            'fecha grado' => 'anio',
            'fecha titulacion' => 'anio',
            'fecha egreso' => 'anio',
            'anio' => 'anio',
            'ano' => 'anio',
            'nombre de tesis' => 'tema',
            'tesis' => 'tema',
            'titulo de tesis' => 'tema',
            'tema' => 'tema',
            'director de tesis' => 'director',
            'director' => 'director',
            'tesis director' => 'director',
            'url' => 'url',
            'link' => 'url',
            'enlace' => 'url',
        ];

        return $map[$header] ?? null;
    }

    private function normalizeHeader($value): string
    {
        $text = mb_strtolower($this->cleanText($value) ?? '', 'UTF-8');
        $text = strtr($text, [
            'á' => 'a',
            'é' => 'e',
            'í' => 'i',
            'ó' => 'o',
            'ú' => 'u',
            'ü' => 'u',
            'ñ' => 'n',
            'Ã¡' => 'a',
            'Ã©' => 'e',
            'Ã­' => 'i',
            'Ã³' => 'o',
            'Ãº' => 'u',
            'Ã¼' => 'u',
            'Ã±' => 'n',
        ]);
        $text = preg_replace('/[^a-z0-9]+/u', ' ', $text) ?? $text;

        return trim(preg_replace('/\s+/u', ' ', $text) ?? $text);
    }

    private function readRow($sheet, int $rowNumber, int $highestColumn): array
    {
        $row = [];

        for ($column = 1; $column <= $highestColumn; $column++) {
            $row[] = $sheet->getCell(Coordinate::stringFromColumnIndex($column) . $rowNumber)->getValue();
        }

        return $row;
    }

    private function storeRow(array $data): void
    {
        $tesis = $this->findExistingTesis($data) ?? new Tesis();
        $alreadyExists = $tesis->exists;

        $tesis->fill($data);

        if (! $alreadyExists) {
            $tesis->save();
            $this->created++;
            return;
        }

        if (! $tesis->isDirty()) {
            $this->unchanged++;
            return;
        }

        $tesis->save();
        $this->updated++;
    }

    private function findExistingTesis(array $data): ?Tesis
    {
        if (! empty($data['cve_uaslp'])) {
            return Tesis::query()
                ->where('cve_uaslp', $data['cve_uaslp'])
                ->where('tema', $data['tema'])
                ->first();
        }

        return Tesis::query()
            ->where('programa', $data['programa'])
            ->where('area', $data['area'])
            ->where('alumno', $data['alumno'])
            ->where('tema', $data['tema'])
            ->where('director', $data['director'])
            ->orderByDesc('id')
            ->first();
    }

    private function cleanText($value): ?string
    {
        if ($value === null) {
            return null;
        }

        $text = trim((string) $value);
        $text = preg_replace('/\s+/u', ' ', $text) ?? $text;

        return $text !== '' ? $text : null;
    }

    private function cleanCode($value): ?string
    {
        if ($value === null) {
            return null;
        }

        $code = trim((string) $value);
        $code = preg_replace('/\s+/u', '', $code) ?? $code;

        return $code !== '' ? $code : null;
    }

    private function isEmptyRow(array $row): bool
    {
        foreach ($row as $value) {
            if ($this->cleanText($value) !== null) {
                return false;
            }
        }

        return true;
    }

    private function extractYear($value): ?int
    {
        if ($value === null || $value === '') {
            return null;
        }

        if (is_numeric($value)) {
            return (int) ExcelDate::excelToDateTimeObject((float) $value)->format('Y');
        }

        try {
            return (int) Carbon::parse((string) $value)->format('Y');
        } catch (\Throwable $exception) {
            if (preg_match('/\b(19|20)\d{2}\b/', (string) $value, $matches) === 1) {
                return (int) $matches[0];
            }
        }

        return null;
    }

    private function isValidYear(int $year): bool
    {
        return $year >= Tesis::MIN_YEAR && $year <= now()->year + 1;
    }
}

class TesisImportReadFilter implements IReadFilter
{
    private $maxColumn;

    public function __construct(int $maxColumn)
    {
        $this->maxColumn = $maxColumn;
    }

    public function readCell($columnAddress, $row, $worksheetName = ''): bool
    {
        return Coordinate::columnIndexFromString($columnAddress) <= $this->maxColumn;
    }
}
