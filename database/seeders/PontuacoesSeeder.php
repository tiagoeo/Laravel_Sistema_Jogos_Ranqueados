<?php

namespace Database\Seeders;

use App\Models\Pontuacoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PontuacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pontuacoes::create([
            'users_id' => 1,
            'games_id' => 1,
            'pontos' => 10,
            'extras' => '[10]',
        ]);
    }
}
