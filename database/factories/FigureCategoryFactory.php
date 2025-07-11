<?php

namespace Database\Factories;

use App\Models\Figure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FigureCategory>
 */
class FigureCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $animeFilm = ['Сага о винланде', 'атака титанов', '7 смертельных врагов', 'сага о винланде', 'атака титанов', '7 смертельных врагов'];
        return [
            'name' => $animeFilm[random_int(0, count($animeFilm) - 1)],
            'description' => fake()->text(100),
        ];
    }
}
