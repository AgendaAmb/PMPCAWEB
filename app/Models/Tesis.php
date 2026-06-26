<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tesis extends Model
{
    public const MIN_YEAR = 1901;

    protected $table = 'tesis';

    protected $fillable = [
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

    public function scopeBuscar(Builder $query, ?string $search): Builder
    {
        $search = $this->normalizeSearch($search);

        if ($search === '') {
            return $query;
        }

        $terms = array_values(array_unique(
            preg_split('/\s+/u', $search, -1, PREG_SPLIT_NO_EMPTY) ?: []
        ));

        return $query->where(function (Builder $builder) use ($search, $terms): void {
            $this->applySearchToColumns($builder, $search);

            if (count($terms) < 2) {
                return;
            }

            $builder->orWhere(function (Builder $compoundQuery) use ($terms): void {
                foreach ($terms as $term) {
                    $compoundQuery->where(function (Builder $termQuery) use ($term): void {
                        $this->applySearchToColumns($termQuery, $term);
                    });
                }
            });
        });
    }

    public function scopeOrdenarPorRelevancia(Builder $query, ?string $search): Builder
    {
        $search = $this->normalizeSearchKey($this->normalizeSearch($search));

        if ($search === '') {
            return $query;
        }

        [$scoreSql, $bindings] = $this->searchRelevanceSql($query, $search);

        return $query->orderByRaw($scoreSql . ' desc', $bindings);
    }

    private function normalizeSearch(?string $search): string
    {
        $search = trim((string) $search);

        return preg_replace('/\s+/u', ' ', $search) ?? $search;
    }

    private function applySearchToColumns(Builder $query, string $term): void
    {
        $like = '%' . $this->normalizeSearchKey($term) . '%';

        foreach ($this->searchableColumns() as $index => $column) {
            $expression = $this->normalizedColumnExpression($query, $column);

            if ($index === 0) {
                $query->whereRaw($expression . ' like ?', [$like]);

                continue;
            }

            $query->orWhereRaw($expression . ' like ?', [$like]);
        }
    }

    /**
     * @return array{0: string, 1: array<int, string>}
     */
    private function searchRelevanceSql(Builder $query, string $search): array
    {
        $weightedColumns = [
            'alumno' => 500,
            'director' => 420,
            'tesisDirector' => 420,
            'tema' => 180,
            'area' => 90,
            'programa' => 70,
            'cve_uaslp' => 60,
            'anio' => 40,
        ];

        $parts = [];
        $bindings = [];

        foreach ($weightedColumns as $column => $weight) {
            $expression = $this->normalizedColumnExpression($query, $column);
            $parts[] = "case when $expression like ? then $weight else 0 end";
            $bindings[] = '%' . $search . '%';
        }

        return ['(' . implode(' + ', $parts) . ')', $bindings];
    }

    private function normalizeSearchKey(string $search): string
    {
        $search = Str::ascii(mb_strtolower($search, 'UTF-8'));
        $search = preg_replace('/[^a-z0-9]+/u', ' ', $search) ?? $search;

        return trim(preg_replace('/\s+/u', ' ', $search) ?? $search);
    }

    /**
     * @return array<int, string>
     */
    private function searchableColumns(): array
    {
        return [
            'tema',
            'alumno',
            'director',
            'area',
            'programa',
            'cve_uaslp',
            'tesisDirector',
            'anio',
        ];
    }

    private function normalizedColumnExpression(Builder $query, string $column): string
    {
        $grammar = $query->getQuery()->getGrammar();
        $expression = 'coalesce(' . $grammar->wrap($column) . ", '')";

        foreach ($this->accentReplacements() as $accented => $plain) {
            $expression = "replace($expression, '$accented', '$plain')";
        }

        return 'lower(' . $expression . ')';
    }

    /**
     * SQLite's lower()/LIKE do not fold accented characters, so we normalize the
     * most common Spanish/Latin accents in SQL before comparing.
     *
     * @return array<string, string>
     */
    private function accentReplacements(): array
    {
        return [
            'Á' => 'a',
            'À' => 'a',
            'Â' => 'a',
            'Ä' => 'a',
            'Ã' => 'a',
            'Å' => 'a',
            'á' => 'a',
            'à' => 'a',
            'â' => 'a',
            'ä' => 'a',
            'ã' => 'a',
            'å' => 'a',
            'É' => 'e',
            'È' => 'e',
            'Ê' => 'e',
            'Ë' => 'e',
            'é' => 'e',
            'è' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'Í' => 'i',
            'Ì' => 'i',
            'Î' => 'i',
            'Ï' => 'i',
            'í' => 'i',
            'ì' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'Ó' => 'o',
            'Ò' => 'o',
            'Ô' => 'o',
            'Ö' => 'o',
            'Õ' => 'o',
            'ó' => 'o',
            'ò' => 'o',
            'ô' => 'o',
            'ö' => 'o',
            'õ' => 'o',
            'Ú' => 'u',
            'Ù' => 'u',
            'Û' => 'u',
            'Ü' => 'u',
            'ú' => 'u',
            'ù' => 'u',
            'û' => 'u',
            'ü' => 'u',
            'Ñ' => 'n',
            'ñ' => 'n',
            'Ç' => 'c',
            'ç' => 'c',
        ];
    }
}
