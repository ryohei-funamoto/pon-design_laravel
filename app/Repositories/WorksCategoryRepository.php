<?php

namespace App\Repositories;

use App\Models\WorksCategory;

class WorksCategoryRepository
{
    public function getAllCategories()
    {
        return WorksCategory::select('name')
            ->get();
    }
}
