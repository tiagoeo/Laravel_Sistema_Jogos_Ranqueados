<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Website::create([
            'nome' => 'Website Dinamico com sistema de jogos ranqueados',
            'telefone' => '999999999',
            'manutencao' => 0,
        ]);
    }
}
