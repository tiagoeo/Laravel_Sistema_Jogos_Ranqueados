@extends('layouts.main')

@section('title', $pagina->titulo)

@section('content')

@if ($website->manutencao == 0)

    {{-- Menu --}}
    @include('navbars.header-menu-navbar')

    {{-- Main --}}
    @include('navbars.main-menu')
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

    {{-- Modals --}}
        @include('modals.login-modal')
        @include('modals.register-modal')
    {{-- Fim Modals --}}

@else
    @include('manutencao')
@endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
    <script>
        $("#btnLoginMenu").click(function(){
            if(validarLogin(1)){
                submitLogin(1);
            }
        });

        $("#btnLoginModal").click(function(){
            if(validarLogin(2)){
                submitLogin(2);
            }
        });

        $("#btnRegisterModal").click(function(){
            if(validarRegister()){
                submitRegister();
            }
        });

        $("#btnOpenLoginModal").click(function(){
            $("#loginModal").modal('show');
        });

        $("#btnOpenRegisterModal").click(function(){
            $("#registerModal").modal('show');
        });

        function buscarClassificacao(){  
            $('[name="gmClassificacao"]').each(function(index) { 
                submitClassificacao($( this ).attr("value"));
            });
        }

        function validarLogin(tipo){
            if (tipo == 1){
                var email = $("#emailLoginMenu");
                var password = $("#passwordLoginMenu");

                if(!email.val() || email.val().length < 3){
                    $('#fieldEmailLoginMenu').addClass('error');
                    $('#messageEmailLoginMenu').html('<div class="ui pointing label">Digite seu email</div>');
                    return false;
                }else if(!validaEmail(email.val())){
					$('#fieldEmailLoginMenu').addClass('error');
					$('#messageEmailLoginMenu').html('Formato de email inválido! ex.: exemplo@exemplo.com');
                    return false;
                }else{
                    $('#fieldEmailLoginMenu').removeClass('error');
                    $('#messageEmailLoginMenu').html('');
                }

                if(!password.val() || password.val().length < 4){
                    $('#fieldPasswordLoginMenu').addClass('error');
                    $('#messagePasswordLoginMenu').html('<div class="ui pointing label">Mínimo 4 (quatro) caracteres</div>');
                    return false;
                }else{
                    $('#fieldPasswordLoginMenu').removeClass('error');
                    $('#messagePasswordLoginMenu').html('');
                }
                return true;
            }else{
                var email = $("#emailLoginModal");
                var password = $("#passwordLoginModal");

                if(!email.val() || email.val().length < 3){
                    $('#fieldEmailLoginModal').addClass('error');
                    $('#messageEmailLoginModal').html('<div class="ui pointing label">Digite seu email</div>');
                    return false;
                }else if(!validaEmail(email.val())){
					$('#fieldEmailLoginModal').addClass('error');
					$('#messageEmailLoginModal').html('Formato de email inválido! ex.: exemplo@exemplo.com');
                    return false;
                }else{
                    $('#fieldEmailLoginModal').removeClass('error');
                    $('#messageEmailLoginModal').html('');
                }

                if(!password.val() || password.val().length < 4){
                    $('#fieldPasswordLoginModal').addClass('error');
                    $('#messagePasswordLoginModal').html('<div class="ui pointing label">Mínimo 4 (quatro) caracteres</div>');
                    return false;
                }else{
                    $('#fieldPasswordLoginModal').removeClass('error');
                    $('#messagePasswordLoginModal').html('');
                }
                return true;
            }
            function validaEmail(em) {
                var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return regex.test(em);
            }
        }

        function validarRegister(){
            var nome = $("#nameRegisterModal");
            var email = $("#emailRegisterModal");
            var email2 = $("#email2RegisterModal");
            var senha = $("#passwordRegisterModal");
            var senha2 = $("#password2RegisterModal");
            var checkbox = $("#checkboxRegisterModal");

            if(!nome.val() || nome.val().length < 3){
                $('#fieldNameRegisterModal').addClass('error');
                $('#messageNameRegisterModal').html('<div class="ui pointing label">Mínimo 3 (três) caracteres</div>');
                return false;
            }else{
                $('#fieldNameRegisterModal').removeClass('error');
                $('#messageNameRegisterModal').html('');
            }

            if(!email.val()){
                $('#fieldEmailRegisterModal').addClass('error');
                $('#messageEmailRegisterModal').html('<div class="ui pointing label">Campo em branco!, digite seu email</div>');
                return false;
            }else if(!validaEmail(email.val())){
                $('#fieldEmailRegisterModal').addClass('error');
                $('#messageEmailRegisterModal').html('<div class="ui pointing label">Formato de email inválido! ex.: exemplo@exemplo.com</div>');
                return false;
            }else{
                $('#fieldEmailRegisterModal').removeClass('error');
                $('#messageEmailRegisterModal').html('');
            }

            if(!email2.val()){
                $('#fieldEmail2RegisterModal').addClass('error');
                $('#messageEmail2RegisterModal').html('<div class="ui pointing label">Campo em branco!, digite novamente seu email</div>');
                return false;
            }else if(!validaEmail(email2.val())){
                $('#fieldEmail2RegisterModal').addClass('error');
                $('#messageEmail2RegisterModal').html('<div class="ui pointing label">Formato de email inválido! ex.: exemplo@exemplo.com</div>');
                return false;
            }else if(email.val() != email2.val()){
                $('#fieldEmail2RegisterModal').addClass('error');
                $('#messageEmail2RegisterModal').html('<div class="ui pointing label">Emails diferentes.');
                return false;
            }else{
                $('#fieldEmail2RegisterModal').removeClass('error');
                $('#messageEmail2RegisterModal').html('');
            }
            

            if(!senha.val() || senha.val().length < 7){
                $('#fieldPasswordRegisterModal').addClass('error');
                $('#messagePasswordRegisterModal').html('<div class="ui pointing label">Mínimo 8 (oito) caracteres</div>');
                return false;
            }else{
                $('#fieldPasswordRegisterModal').removeClass('error');
                $('#messagePasswordRegisterModal').html('');
            }

            if(!senha2.val() || senha2.val().length < 7){
                $('#fieldPassword2RegisterModal').addClass('error');
                $('#messagePassword2RegisterModal').html('<div class="ui pointing label">Mínimo 8 (oito) caracteres</div>');
                return false;
            }else if(senha.val() != senha2.val()){
                $('#fieldPassword2RegisterModal').addClass('error');
                $('#messagePassword2RegisterModal').html('<div class="ui pointing label">A confirmação para o campo senha não coincide.');
                return false;
            }else{
                $('#fieldPassword2RegisterModal').removeClass('error');
                $('#messagePassword2RegisterModal').html('');
            }

            if(!checkbox.is(':checked')){
                $('#fieldCheckboxRegisterModal').addClass('error');
                return false;
            }else{
                $('#fieldCheckboxRegisterModal').removeClass('error');
            }

            return true;

            function validaEmail(em) {
                var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return regex.test(em);
            }
        }
        
        function clearRegister(){
            $('#fieldNameRegisterModal').removeClass('error');
            $('#messageNameRegisterModal').html('');

            $('#fieldEmailRegisterModal').removeClass('error');
            $('#messageEmailRegisterModal').html('');

            $('#fieldEmail2RegisterModal').removeClass('error');
            $('#messageEmail2RegisterModal').html('');

            $('#fieldPasswordRegisterModal').removeClass('error');
            $('#messagePasswordRegisterModal').html('');

            $('#fieldPassword2RegisterModal').removeClass('error');
            $('#messagePassword2RegisterModal').html('');

            $('#mensageRegisterModal').html('');
        }
        
        function submitClassificacao(gm) {
            var dados = {"_token": "{{ csrf_token() }}", "game": gm};
            $.ajax({ 
                url: "/cls",
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

        function submitLogin(tp) {
            var dados;
            if (tp == 1){
                dados = $('#formularioLoginMenu').serialize();
            }else{
                dados = $('#formularioLoginModal').serialize();
            }
            $.ajax({ 
                url: "{{ route('login') }}",
                data: dados,
                type: "POST",
                dataType: "json",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function(retorno){
                    if (retorno != null){
                        if (tp == 1){
                            $('#formularioLoginMenu').removeClass('loading');
                        }else{
                            $('#formularioLoginModal').removeClass('loading');
                        }
                    }   
                },
                beforeSend: function() { 
                    if (tp == 1){
                        $('#formularioLoginMenu').addClass('loading');
                    }else{
                        $('#formularioLoginModal').addClass('loading');
                    }
                },
                error: function(e) {
                    if (tp == 1){
                        $('#formularioLoginMenu').removeClass('loading');
                        $('#messageLoginMenu').html('');
                    }else{
                        $('#formularioLoginModal').removeClass('loading');
                        $('#messageLoginModal').html('');
                    }

                    if(!e.responseJSON){
                        //console.log(e.responseText);
                        window.location.href = "{{ route('dashboard') }}";
                    }else{
                        $.each(e.responseJSON.errors, function (key, value) {
                            if (key == 'password'){
                                if (tp == 1){
                                    $('#messagePasswordLoginMenu').html(value);
                                }else{
                                    $('#messagePasswordLoginModal').html(value);
                                }
                            }else if (key == 'email'){
                                if (tp == 1){
                                    $('#messageEmailLoginMenu').html(value);
                                }else{
                                    $('#messageEmailLoginModal').html(value);
                                }
                            }
                        });
                    }
                }
            });
        }

        function submitRegister() {
            $.ajax({ 
                url: "{{ route('register') }}",
                data: $('#formularioRegisterModal').serialize(),
                type: "POST",
                dataType: "json",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function(retorno){
                    if (retorno != null){
                        $('#formularioRegisterModal').removeClass('loading');
                    }   
                },
                beforeSend: function() { 
                    $('#formularioRegisterModal').addClass('loading');

                },
                error: function(e) {
                    $('#formularioRegisterModal').removeClass('loading');

                    if(!e.responseJSON){
                        //console.log(e.responseText);
                        //window.location.href = "{{ route('dashboard') }}";
                    }else{
                        $.each(e.responseJSON.errors, function (key, value) {
                            if (key == 'password'){
                                $('#messagePasswordLoginMenu').html(value);
                            }else if (key == 'email'){
                                $('#messageEmailLoginModal').html(value);
                            }
                        });
                    }
                }
            });
        }

        function submitMyScores() {
            var dados = {"_token": "{{ csrf_token() }}"};
            $.ajax({ 
                url: "/mycls",
                data: dados,
                type: "POST",
                dataType: "json",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function(retorno){
                    if (retorno != null){
                        $('#minhasPontuacoes').html('');
                        var totalGames = Object.keys(retorno).length;

                        for(i = 0; i <= totalGames; i++){
                            if (typeof retorno[i] !== 'undefined'){
                                $('#minhasPontuacoes').append('<tr><td>'+retorno[i].nome+'</td><td>'+retorno[i].pontos+'</td></tr>');
                            }
                        }

                        $('#meuTotalJogos').html("<tr><th>@lang('welcome.total_games')</th><th>"+totalGames+"</th></tr>");
                    }else{
                        $('#minhasPontuacoes').html('');
                        $('#meuTotalJogos').html("<tr><th>@lang('welcome.total_games')</th><th>0</th></tr>");
                    }
                    
                },
                beforeSend: function() { 
                    $('#gamePontuacoes').html('<div class="ui active loader"></div>');
                },
                error: function(e) {
                    $('#meuTotalJogos').html('<tr><th>Erro: ao buscar informações.</th></tr>');
                }
            });
        }

        $(window).on("load", function() {
            buscarClassificacao();
            @auth
            submitMyScores();
            @endauth
		});
    </script>
@endsection