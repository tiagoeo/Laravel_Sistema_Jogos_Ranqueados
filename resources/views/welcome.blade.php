<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--
        Trattec Informática - trattecinformatica.com.br
        Tiago Oliveira (tiago@trattecinformatica.com.br)
    -->
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#563d7c">
        <meta name="author" content="Tiago Oliveira">
        <meta name="description" content="Website dinâmico com sistema de jogo multiplataforma ranqueado">
        <meta name="keywords" content="Website, Dinamico, jogo, game, multiplataforma, ranqueado">
        <title>Website dinâmico com jogos ranqueados</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="#">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css" />
    </head>
    <body>
        <header>
            <div class="ui brown inverted menu">
                <a class="active orange item" href="/">
                    <i class="home icon"></i>
                    Home
                </a>
                <div class="right menu">
                    <a class="active blue item" id="btnLoginModal">
                        <i class="sign-in icon"></i>
                        Login
                    </a>
                </div>
            </div>	
		</header>
        <!-- Main -->
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
        <!-- // Main -->


        <!-- Rodapé -->
        <div class="ui inverted vertical footer segment"> 
        <div class="ui center aligned container"> 
            <div class="ui stackable inverted divided grid">
            <div class="ui horizontal inverted small divided link list"> 
                <a class="item" id="btnFooterQuemSomos">Quem somos</a> 
                <a class="item" id="btnFooterContato">Contate-nos</a> 
                <a class="item" id="btnFooterTermos">Termos e Condições</a> 
                <a class="item" id="btnFooterPoliticaPrivacidade">Política de Privacidade</a> 
            </div> 
            </div>
        </div>
        </div>
        <!-- // Rodapé -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
        <script></script>
    </body>
</html>
