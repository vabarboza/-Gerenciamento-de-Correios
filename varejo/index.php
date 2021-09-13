<?php
include_once('../header.php');
include_once('../footer.php');
include_once('../conexao.php');

$qry = 'SELECT * FROM tbl_varejo ORDER BY nome ASC';
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
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?>
        </div>
      </div>
    <?php } ?>

</main>

<footer class="page-footer bg-danger-dark">
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y'); ?> Grupo Bellinati
    </div>
  </div>
</footer>