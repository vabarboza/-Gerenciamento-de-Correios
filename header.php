<!DOCTYPE html>
<html>

<head>
  <base href="http://localhost" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/materialize.css">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>App Grupo Bellinati Perez</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>
  <div class="navbar-fixed">
    <nav class="bg-danger-dark z-depth-2">
      <div class="nav-wrapper">
        <a data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
        <a href="index.php" class="brand-logo right">
          <img class="responsive-img" src="img/add/laco-azul-n.png" style="height: 30px;">
          <img class="responsive-img" src="img/topo.png" style="height: 30px;"></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
        </ul>
      </div>
    </nav>
  </div>


  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background">
          <img class="responsive-img" src="img/unnamed.jpg">
        </div>
        <a><img class="responsive-img" style="height: 70px;" src="img/topo.png"></a>
        <a><span class="white-text name" style="margin-top: 0%;">Grupo Bellinati
            Perez</span></a>
        <a><span class="white-text email">www.bellinatiperez.com.br</span></a>
      </div>
    </li>
    <li><a class="subheader">Geral</a></li>
    <ul class="collapsible collapsible-accordion">

      <li>
        <a class="collapsible-header waves-effect waves-red"><i class="far fa-star hvr-push"></i>Bem Vindo</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="integracao.php">Integração</a></li>
            <li><a class="animated fadeInLeft" href="docs/manual.pdf" download="manual.pdf">Manual de
                Integração</a></li>
          </ul>
        </div>
      </li>

      <li>
        <a class="collapsible-header waves-effect waves-red"><i
            class="fas fa-bullhorn hvr-push infinite"></i>Notícias</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="noticias/index.php">Informativos</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a class="collapsible-header waves-effect waves-red"><i class="far fa-comments hvr-push"></i>Contatos</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="contatos/index.php">Telefones</a></li>
            <li><a class="animated fadeInLeft" href="contatos/uteis.php">Telefones Uteis</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a class="collapsible-header waves-effect waves-red">
          <i class="far fa-question-circle hvr-push"></i>Duvidas Frequentes</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="duvidas/indexadm.php">Duvidas Administrativas</a></li>
            <li><a class="animated fadeInLeft" href="duvidas/indexrh.php">Duvidas RH</a></li>
            <li><a class="animated fadeInLeft" href="duvidas/indexsup.php">Duvidas Suporte</a></li>
            <li><a class="animated fadeInLeft" href="duvidas/bot.php">Chat Interativo <span class="new badge red"
                  data-badge-caption="">Beta</span></a></li>
          </ul>
        </div>
      </li>
      <li>
        <a class="collapsible-header waves-effect waves-red"><i class="far fa-calendar-alt hvr-push"></i>Calendário</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="calendario/feriados.php">Feriados</a></li>
            <li><a class="animated fadeInLeft" href="calendario/index.php">Calendario de Eventos</a></li>
          </ul>
        </div>
      </li>
      <div class="divider"></div>
      <li><a class="subheader">Extras</a></li>

      <li>
        <a class="collapsible-header waves-effect waves-red" href="filiais/index.php"><i
            class="far fa-building hvr-push"></i>Filiais</a>

      </li>

      <li>
        <a class="collapsible-header waves-effect waves-red"><i class="fas fa-people-arrows hrv-push"></i>Parceiros</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="bancos/index.php">Bancos Parceiros</a></li>
            <li><a class="animated fadeInLeft" href="varejo/index.php">Varegistas Parceiros</a></li>
            <li><a class="animated fadeInLeft" href="conveniados/index.php">Empresas Conveniadas</a></li>
          </ul>
        </div>
      </li>

      <!--
      <li>
        <a class="collapsible-header waves-effect waves-red"><i class="fas fa-book-reader hvr-push"></i>Manuais</a>
        <div class="collapsible-body">
          <ul>
            <li><a class="animated fadeInLeft" href="#">Exemplo</a></li>
            <li><a class="animated fadeInLeft" href="#">Exemplo</a></li>
          </ul>
        </div>
      </li>
      -->

      <li>
        <a class="collapsible-header waves-effect waves-red"><i class="far fa-handshake hvr-push"></i>Negociações
          <span class="new badge red" data-badge-caption="">Em Breve</span></a>
        <div class="collapsible-body">
        </div>
      </li>


      <div class="divider"></div>

      <br>
    </ul>
  </ul>