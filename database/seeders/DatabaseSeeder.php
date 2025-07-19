<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ContactsTableSeeder::class,
            NewsCategoriesTableSeeder::class,
            NewsTableSeeder::class,
            UsersTableSeeder::class,
            WorksCategoriesTableSeeder::class,
            WorksTableSeeder::class,
        ]);
    }
}
