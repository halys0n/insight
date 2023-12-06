<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Dado;
class DadoSeeder extends Seeder
{
    public function run()
    {
        Dado::factory()->count(30)->create();
    }
}