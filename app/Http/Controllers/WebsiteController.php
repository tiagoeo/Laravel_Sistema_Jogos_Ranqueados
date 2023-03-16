<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Website;

use App\Models\Paginas;

use App\Models\Grids;

class WebsiteController extends Controller
{
    protected function websiteManutencao(){
        $dados = (object) [
            'nome' => 'Sistema de Jogos Ranqueados com Laravel',
            'telefone' => '9999999999',
            'manutencao' => 1,
          ];
        return $dados;
    }

    public function index(){
        $website = Website::find(1);
        $pagina = Paginas::find(1);
        $grids = Grids::all();

        if ($website == null){
            $website = $this::websiteManutencao();
        }

        return view('welcome', ['website' => $website, 'pagina' => $pagina, 'grids' => $grids]);
    }
}
