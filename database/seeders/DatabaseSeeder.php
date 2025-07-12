<?php

namespace Database\Seeders;

use App\Models\Figure;
use App\Models\FigureCategory;
use App\Models\FiguresImage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FigureCategorySeeder::class,
            FigureSeeder::class,
            FiguresImageSeeder::class
        ]);
    }
}
