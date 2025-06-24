<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['お知らせ', '制作実績', '採用'];

        foreach ($categories as $category) {
            NewsCategory::create(['name' => $category]);
        }
    }
}
