<?php
include_once '../header.php';
include_once '../footer.php';
include_once '../conexao.php';
?>

<main>
  <div class="container">
    <ul class="collection">
      <li class="collection-item active bg-danger-dark">
        <i class="fas fa-gifts"></i>&nbsp; Calendario de Eventos</li>
      <li class="collection-item bg-branco">

        <div class="row center-align">
          <div class="col s12">
            <p></p>
            <img height="170px" src="img/bots/gahag-0002444043_b.svg">
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <blockquote>
              Infelizmente não temos nenhum evento no momento. <br>
              Mas fique tranquilo, em breve teremos mais informações.
            </blockquote>
          </div>
        </div>

      </li>
    </ul>
  </div>
</main>

<footer class="page-footer bg-danger-dark">
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y'); ?> Grupo Bellinati
    </div>
  </div>
</footer>