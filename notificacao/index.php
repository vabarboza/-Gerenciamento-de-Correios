<?php
include_once '../header.php';
include_once '../footer.php';
include_once '../conexao.php';

$QUERY = 'SELECT * FROM tbl_notificacao ORDER BY id DESC limit 1';
$SQL = $conn->query($QUERY) or die($mysqli->error_reporting);

while ($a = mysqli_fetch_array($SQL)) {
  $TITULO = $a['titulo'];
  $TEXTO = $a['texto'];
  $IMG = $a['img'];
}

?>

<main>

  <div class="container">
    <ul class="collection">
      <li class="collection-item active bg-danger-dark center-align" style="font-weight: bold;">
        <i class="animated heartBeat slow infinite fas fa-bullhorn"></i>&nbsp; <?php echo $TITULO ?> &nbsp;<i class="animated heartBeat slow infinite fas fa-bullhorn"></i></li>
      <li class="collection-item bg-branco">

        <div class="row">

          <div class="col s12 center-align">
            <p></p>
            <img height="170px" src="img/notif/<?php echo $IMG ?>.svg">
          </div>
        </div>
        <div class="row">
          <div class="col s12 center-align">

            <span class="card-title" style="font-weight: bold; font-size: medium;"><?php echo $TITULO ?></span>
            <p><?php echo $TEXTO ?></p>
            <p></p>


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