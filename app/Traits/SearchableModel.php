<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

trait SearchableModel
{
    protected array $searchableColumns = [];
    protected array $searchableRelations = [];

    // Getter for searchable columns
    public function getSearchableColumns(): array
    {
        return $this->searchableColumns;
    }

    // Getter for searchable relations
    public function getSearchableRelations(): array
    {
        return $this->searchableRelations;
    }

    public function scopeSearch(Builder $query, string $searchTerm = ''): Builder
    {
        if (!$searchTerm) {
            return $query;
        }

        $searchableColumns = $this->getSearchableColumns();

        return $query->where(function (Builder $query) use ($searchTerm, $searchableColumns) {
            foreach ($searchableColumns as $column) {
                if (str_contains($column, '.')) {
                    [$relation, $columnName] = explode('.', $column);
                    $query->orWhereHas($relation, fn($q) => $q->where($columnName, 'like', "%{$searchTerm}%"));
                } else {
                    $query->orWhere($column, 'like', "%{$searchTerm}%");
                }
            }
        });
    }

    public function scopeApplyFilters(Builder $query, array $filters): Builder
    {
        foreach ($filters as $key => $value) {
            if ($value === null) {
                continue; // Skip null values
            }

            if (is_bool($value)) {
                $query->where($key, $value);
            } elseif ($value instanceof Carbon) {
                $query->where($key, '=', $value);
            } elseif (
                is_array($value) && count($value) === 2 &&
                $value[0] instanceof Carbon && $value[1] instanceof Carbon
            ) {
                $query->whereBetween($key, [$value[0], $value[1]]);
            } else {
                if (str_contains($key, '.')) {
                    [$relation, $column] = explode('.', $key);
                    $query->whereHas($relation, fn($q) => $q->where($column, $value));
                } else {
                    if (in_array($key, $this->getDates())) {
                        $query->where($key, '=', $value);
                    } else {
                        $query->where($key, $value);
                    }
                }
            }
        }

        return $query;
    }
}
