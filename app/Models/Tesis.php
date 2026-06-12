<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

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

    private function normalizeSearch(?string $search): string
    {
        $search = trim((string) $search);

        return preg_replace('/\s+/u', ' ', $search) ?? $search;
    }

    private function applySearchToColumns(Builder $query, string $term): void
    {
        $like = '%' . $term . '%';

        $query->where('tema', 'like', $like)
            ->orWhere('alumno', 'like', $like)
            ->orWhere('director', 'like', $like)
            ->orWhere('area', 'like', $like)
            ->orWhere('programa', 'like', $like)
            ->orWhere('cve_uaslp', 'like', $like)
            ->orWhere('tesisDirector', 'like', $like)
            ->orWhere('anio', 'like', $like);
    }
}
