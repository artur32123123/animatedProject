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
        $titles = [
            'Сага о винланде',
            'атака титанов',
            '7 смертельных врагов',
            'наруто',
            'синий экзорцист',
            'титаны',
        ];

        foreach ($titles as $title) {
            FigureCategory::factory()->create([
                'name' => $title,
                'description' => fake()->text(100),
            ]);
        }
    }
}
