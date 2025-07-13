<?php

namespace Database\Seeders;

use App\Models\WorksCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorksCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Webデザイン',
            'グラフィックデザイン',
            'Web制作',
            'Web開発',
            'AI開発',
        ];

        foreach ($categories as $category) {
            WorksCategory::create(['name' => $category]);
        }
    }
}
