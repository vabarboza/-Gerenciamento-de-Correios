<?php
include_once 'header.php';
include_once 'footer.php';
?>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-danger-dark">
  <a class="navbar-brand" href="inicio.php">
    <img src="img/topo.png" style="width: 40px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-university"></i>&nbsp; Bancos
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="pages/bancos/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Banco
          </a>
          <a class="dropdown-item" href="pages/bancos/lista.php">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Bancos
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-calendar-alt"></i>&nbsp; Calendarios
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <h6 class="dropdown-header">Feriados</h6>
          <a class="dropdown-item" href="pages/calendario/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Feriado
          </a>
          <a class="dropdown-item" href="pages/calendario/lista.php">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Feriados
          </a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Eventos</h6>
          <a class="dropdown-item" href="pages/eventos/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Eventos
          </a>
          <a class="dropdown-item" href="pages/eventos/lista.php">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Eventos
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-handshake"></i>&nbsp; Conveniados
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="pages/convenios/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Conveniado
          </a>
          <a class="dropdown-item" href="pages/convenios/lista.php">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Conveniados
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-rss"></i>&nbsp; Noticias
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <h6 class="dropdown-header">Noticias</h6>
          <a class="dropdown-item" href="pages/noticias/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Noticia
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Noticias
          </a>
          <h6 class="dropdown-header">Informativos</h6>
          <a class="dropdown-item" href="pages/info/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Informativo
          </a>
          <a class="dropdown-item" href="pages/info/lista.php">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Informativos
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell"></i>&nbsp; Notificações
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Noticia
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Noticias
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-phone-volume"></i>&nbsp; Telefones
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Noticia
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Noticias
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-reveal" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shopping-cart"></i>&nbsp; Varejos
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="pages/varejos/index.php">
            <i class="fas fa-plus-circle"></i>&nbsp; Cadastrar Varejistas
          </a>
          <a class="dropdown-item" href="pages/varejos/lista.php">
            <i class="fas fa-list-ul"></i>&nbsp; Listar Varejistas
          </a>
        </div>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item">
            <i class="fas fa-cogs"></i> &nbsp; Configurações
          </a>
          <a class="dropdown-item">
            <i class="far fa-envelope"></i> &nbsp; Mensagens
          </a>
          <a class="dropdown-item" href="include/logout.php">
            <i class="fas fa-sign-out-alt"></i> &nbsp; Sair
          </a>
        </div>
      </li>

    </ul>
  </div>
</nav>
<!--/.Navbar -->
<br>