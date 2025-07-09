<?php

namespace Database\Seeders;

use App\Models\Figure;
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
            FigureSeeder::class,
            FiguresImageSeeder::class
        ]);
    }
}
