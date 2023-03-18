<?php

namespace Database\Seeders;

use App\Models\Paginas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paginas::create([
            'nome' => 'Game da memória com icones',
            'descricao' => 'Melhore a concentração, o raciocínio lógico e estimule a memória.',
            'palavraschave' => 'Jogo, mental, memorização, icones',
        ]);
    }
}
