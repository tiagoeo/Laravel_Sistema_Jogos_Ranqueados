<?php

namespace Database\Seeders;

use App\Models\Grids;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GridsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grids::create([
            'paginas_id' => 1,
            'jogo_id' => 1,
            'titulo' => 'Game da memória com icones',
            'descricao' => 'Melhore a concentração, raciocínio lógico e estimule a sua memória',
            'img' => '',
            'botaonome' => 'Acesso',
            'botaolink' => '/',
        ]);
    }
}
