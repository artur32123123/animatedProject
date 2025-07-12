<?php

namespace Database\Seeders;

use App\Models\Figure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class FigureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $faker = Faker::create();
        $materials = ['пластик', 'смола', 'металл', 'гипс'];
        $labels = ['none', 'top', 'hit', 'new', 'exclusive', 'sale'];
        $sizes = ['10x10x15', '15x15x20', '20x20x25', '25x25x30', '30x30x40'];

        for ($i = 0; $i < 100; $i++) {
            $name = $faker->words(rand(2, 4), true);

            DB::table('figures')->insert([
                'name' => Str::title($name).' фигурка',
                'weight' => rand(100, 5000) / 100,
                'material' => $materials[array_rand($materials)],
                'label' => $labels[array_rand($labels)],
                'figure_category_id' => rand(1, 5),
                'size' => $sizes[array_rand($sizes)],
                'discount' => rand(0, 3) ? 0 : rand(10, 50), // 25% товаров со скидкой
                'price' => rand(500, 15000),
            ]);
        }
    }
}
