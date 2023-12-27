<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Albums extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::create(['id'=>1,'title' => 'Детские группы','description' => 'Альбом детских групп','path_preview' => 'Child_group.png',]);
        Album::create(['id'=>2,'title' => 'Сборы','description' => '','path_preview' => 'Fees.png',]);
        Album::create(['id'=>3,'title' => 'Фитнес','description' => '','path_preview' => 'Fitnes.png',]);
        Album::create(['id'=>4,'title' => 'Тренеры','description' => '','path_preview' => 'Treners.png',]);
        Album::create(['id'=>5,'title' => 'Тренировки','description' => '','path_preview' => 'Trenings.png',]);    }
}
