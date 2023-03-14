<hr><h2 align="left">APRESENTAÇÃO</h2>

<h3 align="left">
  Esta é uma versão do <a href="https://github.com/tiagoeo/Website_Dinamico_Sistema_Jogos_Ranqueados">sistema de jogos ranqueados</a> no framework PHP Laravel; front-end em Semantic-UI e biblioteca JQuery.
</h3>

<p align="center">
  <img src="https://github.com/tiagoeo/website_dinamico_sistema_jogo_ranqueado/blob/main/static/img/wsjr_usuario_convidado.png" alt="Website usuário convidado" height="444" width="435">
</p>

<hr><h2 align="left">SOBRE</h2>

<p align="left">
  Esse sistema cadastra e efetua sessão de login via janela modal, informa em uma tabela os jogos e os pontos vinculados a conta. É possível jogar em "modo livre" sem possuir conta ou vinculo, também em "modo ranqueado" que dependendo do game o jogador pode ganhar ou perder pontos. Este trabalho é a junção dos projetos <a href="https://github.com/tiagoeo/website_dinamico_formulario_para_Whatsapp">website dinamico com formulario para Whatsapp</a> e do <a href="https://github.com/tiagoeo/website_game_memoria">jogo da memória com icones</a> (possui versão de "modo livre" disponível no <a href="https://tiagoeo.github.io/Website_Game_Memoria/">github-pages</a>).
</p>
<p align="center">
  <img src="https://github.com/tiagoeo/website_dinamico_sistema_jogo_ranqueado/blob/main/static/img/wsjr_usuario_logado.png" alt="Website usuário logado" height="444" width="435">
</p>
<p align="left">
  O objetivo é fornecer após o login, a opção de vincular a pontuação dos jogos no site via método POST do HTTP/HTTPS. Cada game tem de forma similar o seguinte padrão de fluxo dos botões.
</p>
<p align="center">
  <img src="https://github.com/tiagoeo/website_dinamico_sistema_jogo_ranqueado/blob/main/static/img/wsjr_botao_game_fluxo.png" alt="Fluxo botão game" height="216" width="392">
</p>

<hr><h2 align="left">INFORMAÇÕES E REGRAS DO JOGO DA MEMÓRIA</h2>
<p align="left">
  <ul>
    <li>No 'Modo Livre' inicia o jogo sem a necessidade de logar, contudo não pontua no ranque do site;</li>
    <li>Em 'Modo Ranqueado' é necessário login e criar um vinculo com o game, será carregado o jogo com a última pontuação salva, mantendo a dificuldade em relação ao pontos;</li>
    <li>O botão de 'Nova fase', cria um novo jogo e mantém os pontos atuais, mas caso pressionado antes de terminar a fase perde-se o bônus;</li>
    <li>Até 50 pontos, o tempo de memorizar os icones são de 4 seg, bônus de 5 pontos em acertos sem erros, após o primeiro erro perde-se o bônus, mas não há penalidades em novos erros;</li>
    <li>A partir de 50 pontos, o bônus passa para 2 e o tempo para memorizar passa a 3 seg, em caso de erro é perdido o bônus e descontado 1 ponto por cada erro;</li>
    <li>Depois dos 100 pontos, não há bônus, erros passam a descontar 2 pontos;</li>
    <li>Após 150 pontos, o tempo de memorizar é 2 seg;</li>
  </ul>
</p>

<hr><h2 align="left">DIAGRAMA DO BANCO DE DADOS</h2>
<h4 align="left">TABELAS: WEBSITE, PAGINAS, GRIDS E USUARIOS.</h4> 
  <p align="left">
    <ul>
    <li>Possuem colunas padrão de sites dinâmicos.</li>
    </ul>
  </p>
<h4 align="left">TABELA: PONTUACOES</h4>
  <p align="left">
    <ul>
      <li>idusuario: Chave estrangeira da tabela usuarios.</li>
      <li>idgame: Chave estrangeira da tabela games.</li>
      <li>pontos: Local para armazenar pontuações do tipo inteiro.</li>
      <li>extras: Armazena pontuações ou o próprio inventário do tipo array ou json.</li>
    </ul>
  </p>
<h4 align="left">TABELA: GAMES</h4>
<p align="left">
  <ul>
    <li>nome: O nome do jogo.</li>
    <li>bonus: Controla o bônus do game que será multiplicado na pontuação do usuário.</li>
  </ul>
</p>
<p align="center">
  <img src="https://github.com/tiagoeo/website_dinamico_sistema_jogo_ranqueado/blob/main/static/img/wsjr_eer_diagrama.png" alt="EER Diagrama db" height="411" width="542">
</p>

<hr><h2 align="left">REQUERIMENTOS</h2>
<p align="left">
  <ul>
    <li>Servidor compatível com Laravel v10.3.3 (PHP v8.2.0) e banco de dados MySQL.</li>
  </ul>
</p>

<hr><h2 align="left">LINGUAGENS E FERRAMENTAS</h2>
<p align="center">
  <a href="https://git-scm.com/" target="_blank" rel="noreferrer">
    <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/>
  </a>
  <a href="https://laravel.com/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> 
  </a> 
  <a href="https://semantic-ui.com" target="_blank" rel="noreferrer"> 
    <img src="https://semantic-ui.com/images/logo.png" alt="Semantic-UI" width="40" height="40"/>
  </a>
  <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/>
  </a>
  <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/>
  </a>
  <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> 
  </a>
  <a href="https://jquery.com/" target="_blank" rel="noreferrer"> 
    <img src="https://icon-library.com/images/jquery-icon-png/jquery-icon-png-7.jpg" alt="JQuery" width="40" height="40"/>
  </a>
  <a href="https://pt.m.wikipedia.org/wiki/Ajax_(programa%C3%A7%C3%A3o)" target="_blank" rel="noreferrer"> 
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a1/AJAX_logo_by_gengns.svg" alt="Ajax" width="40" height="40"/>
  </a>
  <a href="https://www.php.net" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/>
  </a>
  <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/>
  </a> 
</p>
