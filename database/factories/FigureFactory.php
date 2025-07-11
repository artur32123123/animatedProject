<?php

namespace Database\Factories;

use App\Models\Figure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Figure>
 */
class FigureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Figure::class;
    public function definition(): array
    {
        $array = ['Цинковый сплав и Пластик', 'PVC и ABS', ' Пластик', 'Цинковый сплав', 'ABS', 'Цинковый сплав и PVC', 'Карбон', "Кожа"];
        $discount = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50];

        return [
            'name' => fake()->name(),
            'description' => fake()->text(100),
            'weight' => fake()->randomFloat(1, 1, 100),
            'discount' => $discount[random_int(0, count($discount) - 1)],
            'material' => $array[random_int(0, count($array) - 1)],
            'size' => fake()->randomNumber( 3, true) . 'x' . fake()->randomNumber( 3, true) . 'x' . fake()->randomNumber( 3, true),
            'price' => fake()->randomNumber(3, true),

        ];
    }
}
