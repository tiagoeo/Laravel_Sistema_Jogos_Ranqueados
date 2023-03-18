<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Website;

use App\Models\Paginas;

use App\Models\Grids;

use App\Models\Pontuacoes;

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

    public function classificacao(Request $request){

        if ($request->has('game')) {
            if ($request->filled('game')) {
                $gm = request()->input("game");
                $classificacao = Pontuacoes::join('users', 'users.id', '=', 'pontuacoes.users_id')
                                    ->join('games', 'games.id', '=', 'pontuacoes.games_id')
                                    ->select('users.name', 'pontuacoes.pontos', 'games.nome')
                                    ->orderBy('pontuacoes.pontos', 'desc')
                                    ->where('games.id', '=', $gm)
                                    ->get();
                
                if ($classificacao != null){
                    $classificacao['jogadores_total'] = $classificacao->count();
                }

                return json_encode($classificacao);
            }            
        }
    }
}
