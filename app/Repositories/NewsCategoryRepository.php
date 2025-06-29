<?php

namespace App\Repositories;

use App\Models\NewsCategory;

class NewsCategoryRepository
{
    public function getAllCategories()
    {
        return NewsCategory::select('name')
            ->get();
    }
}
