<?php
include_once '../header.php';
include_once '../footer.php';
include_once "../conexao.php";

$QUERY = 'SELECT * FROM tbl_infos';
$SQL = $conn->query($QUERY);

?>

<main>

  <div class="container-fluid">

    <?php
    while ($DADOS = mysqli_fetch_array($SQL)) { ?>

      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <?php echo '<img src="data:image/png;base64,' . base64_encode($DADOS['img']) . '"/>'; ?>
            </div>
            <div class="card-content">
              <p><?php echo $DADOS['texto']; ?></p>
            </div>
            <div class="card-action right-align">
              <span style="font-weight: bold;"><?php echo date('d/m/Y ', strtotime($DADOS['data'])); ?></span>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>

  </div>

</main>

<footer class="page-footer bg-danger-dark">
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y'); ?> Grupo Bellinati
    </div>
  </div>
</footer>