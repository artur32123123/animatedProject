<?php

namespace Database\Seeders;

use App\Models\FigureCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FigureCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FigureCategory::factory(10)->create();
    }
}
