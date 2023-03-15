<!DOCTYPE html>
<!--
    Trattec Informática - trattecinformatica.com.br
    Tiago Oliveira (tiago@trattecinformatica.com.br)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#563d7c">
        <meta name="author" content="Tiago Oliveira">
        <meta name="description" content="Website dinâmico com sistema de jogo multiplataforma ranqueado">
        <meta name="keywords" content="Website, Dinamico, jogo, game, multiplataforma, ranqueado">
        <title>@yield('title')</title>

        <link rel="shortcut icon" href="#">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css" />
    </head>
    <body>

        @yield('content')

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
