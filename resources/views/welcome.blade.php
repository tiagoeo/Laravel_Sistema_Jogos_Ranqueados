@extends('layouts.main')

@section('title', $pagina->titulo)

@section('content')

@if ($website->manutencao == 0)

    {{-- Menu --}}
    @include('navbars.header-menu-guest')

    {{-- Main --}}
    <main>
        <div class="ui placeholder segment ui autumn leaf" id="uiLogin">
            <div class="ui two column very relaxed stackable grid">
                <div class="column">
                    <form class="ui form" id="formularioLogin">
                        <div class="field" id="fieldUsuarioLogin">
                            <label>@lang('welcome.user')</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="Usuário" name="usuarioLogin" id="usuarioLogin">
                                <i class="user icon"></i>
                            </div>
                            <div id="mensageUsuarioLogin">
                            </div>
                        </div>
                        <div class="field" id="fieldSenhaLogin">
                            <label>@lang('welcome.password')</label>
                            <div class="ui left icon input">
                                <input type="password" name="senhaLogin" id="senhaLogin">
                                <i class="lock icon"></i>
                            </div>
                            <div id="mensageSenhaLogin">
                            </div>
                            <div id="mensageLogin">
                            </div>
                        </div>
                        <div class="ui blue submit button" id="btnLogin">
                            <i class="sign-in icon"></i>
                            @lang('welcome.login')
                        </div>
                    </form>
                </div>
                <div class="middle aligned column">
                    <div class="ui big button" id="btnCadastro">
                        <i class="signup icon"></i>
                        @lang('welcome.register')
                    </div>
                </div>
            </div>
            <div class="ui vertical divider" id="ou">
                @lang('welcome.or')
            </div>
        </div>
    </main>
    {{-- Fim Main --}}

    {{-- Grids Games --}}
    @foreach ($grids as $key => $grid)
        <div class="ui vertical stripe segment"> 
            <div class="ui middle aligned stackable grid container">
                <div class="row"> 
                    <div class="eight wide column"> 
                        <h3 class="ui header">{{ $grid->titulo }}</h3> 
                        <p>{{ $grid->descricao }}</p>
                    </div>
                    <div class="eight wide right floated column"> 
                        
                        {{-- Classificação --}}
                        <p id="lblClassificacao"><i class="sort amount up icon"></i><b>@lang('welcome.rank')</b></p>
                        <div class="ui two column centered grid">
                            <div class="column">
                                <table class="ui attached table" name="gmClassificacao" value = "{{ $grid->jogo_id }}">
                                    <thead>
                                    <tr><th class="ten wide">@lang('welcome.name')</th>
                                    <th class="six wide">@lang('welcome.points')</th>
                                    </tr></thead>
                                    <tbody id="gamePontuacoes{{ $grid->jogo_id }}">
                                    </tbody>
                                    <tfoot id="totalJogadores{{ $grid->jogo_id }}">
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        {{-- Fim Classificação --}}
                    </div>
                </div>
                <div class="row">
                    <div class="center aligned column">
                        <a class="ui huge button" href="{{ $grid->botaolink }}" >{{ $grid->botaonome }}</a>
                    </div>
                </div>
            </div> 
        </div>
        <div class="ui section divider"></div>
    @endforeach
    {{-- Fim Grids Games --}}

@else
    @include('manutencao')
@endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
    <script>

        function buscaClassificacao(){  
            $('[name="gmClassificacao"]').each(function(index) { 
                submitClassificacao($( this ).attr("value"));
            });
        }

        function submitClassificacao(gm) {
            var dados = {"_token": "{{ csrf_token() }}", "game": gm};
            $.ajax({ 
                url: "/",
                data: dados,
                type: "POST",
                dataType: "json",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function(retorno){
                    if (retorno != null){
                        $('#gamePontuacoes'+gm).html('');
                        var totalJogadores = Object.keys(retorno).length;

                        if (totalJogadores <= 3){
                            for(i = 0; i <= totalJogadores; i++){
                                if (typeof retorno[i] !== 'undefined'){
                                    $('#gamePontuacoes'+gm).append('<tr><td>'+retorno[i].name+'</td><td>'+retorno[i].pontos+'</td></tr>');
                                }
                            }
                        }else{
                            for(i = 0; i <= 3; i++){
                                if (typeof retorno[i] !== 'undefined'){
                                    $('#gamePontuacoes'+gm).append('<tr><td>'+retorno[i].name+'</td><td>'+retorno[i].pontos+'</td></tr>');
                                }
                            }
                        }
                        
                        $('#totalJogadores'+gm).html("<tr><th>Total Players</th><th>"+retorno.jogadores_total+"</th></tr>");
                    }else{
                        $('#gamePontuacoes'+gm).html('');
                        $('#totalJogadores'+gm).html("<tr><th>Total Players</th><th>0</th></tr>");
                    }
                    
                },
                beforeSend: function() { 
                    $('#gamePontuacoes'+gm).html('<div class="ui active loader"></div>');
                },
                error: function(e) {
                    $('#totalJogadores'+gm).html('<tr><th>Erro: ao buscar informações.</th></tr>');
                }
            });
        }

        $(window).on("load", function() {
            buscaClassificacao();
		});
    </script>
@endsection