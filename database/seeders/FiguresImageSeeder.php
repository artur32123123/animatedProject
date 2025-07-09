<?php

namespace Database\Seeders;

use App\Models\FiguresImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiguresImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       FiguresImage::insert([
        [
            'figure_id' => 1,
            'src' => 'images/Figure/binzo/bz1.jpeg',
        ],
        [
            'figure_id' => 1,
            'src' => 'images/Figure/binzo/bz2.jpeg',
        ],
        [
            'figure_id' => 1,
            'src' => 'images/Figure/binzo/bz3.jpeg',
        ],
        [
            'figure_id' => 2,
            'src' => 'images/Figure/saga/saga1.jpg',
        ],
        [
            'figure_id' => 2,
            'src' => 'images/Figure/saga/saga2.jpeg',
        ],
        [
            'figure_id' => 2,
            'src' => 'images/Figure/saga/saga3.jpeg',
        ],
        [
            'figure_id' => 2,
            'src' => 'images/Figure/saga/saga4.jpeg',
        ]
    ]);
    }
}
