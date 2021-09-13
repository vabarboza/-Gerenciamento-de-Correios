<?php
include_once('header.php');
include_once('footer.php');

include_once('conexao.php');

$qry = 'SELECT * FROM tbl_noticiais';
$result = $conn->query($qry) or die($mysqli->error);

?>

<main>

  <div class="container">

    <?php while ($dado = $result->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img class="activator" src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4" style="font-size: medium;"><?php echo $dado['nome']; ?>
            <i class="fas fa-ellipsis-v right grey-text lighten-1"></i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4" style="font-size: medium;">
            <i class="fas fa-times right grey-text lighten-1"></i><?php echo $dado['nome']; ?></span>
          <p><?php echo $dado['texto']; ?></p>
        </div>
      </div>

      <div class="divider"></div>
      <p></p>
    <?php } ?>

</main>

<footer class="page-footer bg-danger-dark">
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y'); ?> Grupo Bellinati
    </div>
  </div>
</footer>