@extends('layouts.main')

@section('title', 'Website dinâmico com jogos ranqueados')

@section('content')

    {{-- Header --}}
    @include('navbars.header-menu-guest')

    {{-- Main --}}
    <main>
        <div class="ui placeholder segment ui autumn leaf" id="uiLogin">
            <div class="ui two column very relaxed stackable grid">
                <div class="column">
                    <form class="ui form" id="formularioLogin">
                        <div class="field" id="fieldUsuarioLogin">
                            <label>Usuário</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="Usuário" name="usuarioLogin" id="usuarioLogin">
                                <i class="user icon"></i>
                            </div>
                            <div id="mensageUsuarioLogin">
                            </div>
                        </div>
                        <div class="field" id="fieldSenhaLogin">
                            <label>Senha</label>
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
                            Login
                        </div>
                    </form>
                </div>
                <div class="middle aligned column">
                    <div class="ui big button" id="btnCadastro">
                        <i class="signup icon"></i>
                        Cadastro
                    </div>
                </div>
            </div>
            <div class="ui vertical divider" id="ou">
                Ou
            </div>
        </div>
    </main>

@endsection