<?php

namespace App\Contracts;

interface SearchableModelInterface
{
    public function getSearchableColumns(): array;

    public function getSearchableRelations(): array;

    public function getDates(): array; // This will return the date columns
}
