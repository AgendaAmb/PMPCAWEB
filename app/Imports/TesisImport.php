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
    public $revertActions = [];

    public function import(UploadedFile $file): void
    {
        $this->importRows($this->preview($file)['rows']);
    }

    public function preview(UploadedFile $file): array
    {
        $reader = IOFactory::createReaderForFile($file->getRealPath());
        $reader->setReadDataOnly(false);
        $reader->setReadEmptyCells(false);
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
        $rows = [];

        for ($excelRow = $startRow; $excelRow <= $highestDataRow; $excelRow++) {
            if (! $this->isVisibleRow($sheet, $excelRow)) {
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

            $rows[] = $data;
        }

        return [
            'rows' => $rows,
            'skipped' => $this->skipped,
            'hidden' => $this->hidden,
        ];
    }

    public function importRows(array $rows): void
    {
        foreach ($rows as $row) {
            $this->storeRow($row);
        }
    }

    public function describeRows(array $rows): array
    {
        $summary = [
            'created' => 0,
            'updated' => 0,
            'unchanged' => 0,
            'byDestination' => [],
        ];

        foreach ($rows as $index => $row) {
            $existing = $this->findExistingTesis($row);
            $status = 'created';

            if ($existing) {
                $copy = clone $existing;
                $copy->fill($row);
                $status = $copy->isDirty() ? 'updated' : 'unchanged';
            }

            $summary[$status]++;

            $destinationKey = ($row['programa'] ?: 'Sin programa') . '|' . ($row['area'] ?: 'Sin area');

            if (! isset($summary['byDestination'][$destinationKey])) {
                $summary['byDestination'][$destinationKey] = [
                    'programa' => $row['programa'] ?: 'Sin programa',
                    'area' => $row['area'] ?: 'Sin area',
                    'rows' => [],
                ];
            }

            $summary['byDestination'][$destinationKey]['rows'][] = array_merge($row, [
                'status' => $status,
                'preview_number' => $index + 1,
                'preview_index' => $index,
            ]);
        }

        return $summary;
    }

    private function isVisibleRow($sheet, int $rowNumber): bool
    {
        $dimension = $sheet->getRowDimension($rowNumber);

        return $dimension->getVisible()
            && ! $dimension->getZeroHeight()
            && $dimension->getRowHeight() !== 0.0;
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
            'area' => $this->normalizeArea($area),
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
            'cve_uaslp' => $this->cleanCode($this->valueFromColumn($row, $columns, 'cve_uaslp')),
            'programa' => $this->normalizeProgram(
                $this->cleanText($this->valueFromColumn($row, $columns, 'programa')),
                $this->cleanText($this->valueFromColumn($row, $columns, 'modalidad'))
            ),
            'area' => $this->normalizeArea($this->cleanText($this->valueFromColumn($row, $columns, 'area'))),
            'anio' => $this->extractYear($this->valueFromColumn($row, $columns, 'anio')),
            'alumno' => $this->cleanText($this->valueFromColumn($row, $columns, 'alumno')),
            'tema' => $this->cleanText($this->valueFromColumn($row, $columns, 'tema')),
            'director' => $this->cleanText($this->valueFromColumn($row, $columns, 'director')),
            'url' => $this->cleanText($this->valueFromColumn($row, $columns, 'url')),
        ]);
    }

    private function valueFromColumn(array $row, array $columns, string $field)
    {
        if (! array_key_exists($field, $columns)) {
            return null;
        }

        return $row[$columns[$field]] ?? null;
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
            'modalidad' => 'modalidad',
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
            'enlace de tesis' => 'url',
        ];

        return $map[$header] ?? null;
    }

    private function normalizeProgram(?string $programa, ?string $modalidad): string
    {
        $programaKey = $this->normalizeHeader($programa);
        $modalidadKey = $this->normalizeHeader($modalidad);
        $source = trim($modalidadKey . ' ' . $programaKey);

        if (strpos($source, 'maestria') !== false) {
            return 'Maestría en Ciencias Ambientales';
        }

        if (strpos($source, 'doctorado') !== false) {
            return 'Doctorado en Ciencias Ambientales';
        }

        return $programa ?: 'Doctorado en Ciencias Ambientales';
    }

    private function normalizeArea(?string $area): ?string
    {
        $areaKey = $this->normalizeHeader($area);

        if ($areaKey === '') {
            return null;
        }

        $officialAreas = [
            'evaluacion ambiental' => 'Evaluación Ambiental',
            'gestion ambiental' => 'Gestión Ambiental',
            'prevencion y control' => 'Prevención y Control',
            'recursos naturales renovables' => 'Recursos Naturales Renovables',
            'salud ambiental integrada' => 'Salud Ambiental Integrada',
        ];

        if (array_key_exists($areaKey, $officialAreas)) {
            return $officialAreas[$areaKey];
        }

        if (strpos($areaKey, 'evaluacion') !== false && strpos($areaKey, 'ambiental') !== false) {
            return 'Evaluación Ambiental';
        }

        if (strpos($areaKey, 'gestion') !== false && strpos($areaKey, 'ambiental') !== false) {
            return 'Gestión Ambiental';
        }

        if (strpos($areaKey, 'prevencion') !== false && strpos($areaKey, 'control') !== false) {
            return 'Prevención y Control';
        }

        if (strpos($areaKey, 'recursos') !== false && strpos($areaKey, 'renovables') !== false) {
            return 'Recursos Naturales Renovables';
        }

        if (strpos($areaKey, 'salud') !== false && strpos($areaKey, 'integrada') !== false) {
            return 'Salud Ambiental Integrada';
        }

        return $area;
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
        $original = $alreadyExists ? $tesis->only($this->revertableColumns()) : [];

        $tesis->fill($data);

        if (! $alreadyExists) {
            $tesis->save();
            $this->revertActions[] = [
                'action' => 'delete',
                'id' => $tesis->id,
                'alumno' => $tesis->alumno,
            ];
            $this->created++;
            return;
        }

        if (! $tesis->isDirty()) {
            $this->unchanged++;
            return;
        }

        $tesis->save();
        $this->revertActions[] = [
            'action' => 'restore',
            'id' => $tesis->id,
            'data' => $original,
            'alumno' => $tesis->alumno,
        ];
        $this->updated++;
    }

    private function revertableColumns(): array
    {
        return [
            'cve_uaslp',
            'programa',
            'area',
            'anio',
            'alumno',
            'tema',
            'director',
            'tesisDirector',
            'url',
        ];
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
