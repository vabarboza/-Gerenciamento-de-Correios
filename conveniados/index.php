<?php
include_once('../header.php');
include_once('../footer.php');

include_once('../conexao.php'); // caminho do seu arquivo de conexão ao banco de dados
$consultarest = "SELECT * FROM tbl_convenios WHERE tipo = 1 ORDER BY nome ASC";
$rest = $conn->query($consultarest) or die($mysqli->error);

$consultaassis = "SELECT * FROM tbl_convenios WHERE tipo = 2 ORDER BY nome ASC";
$assis = $conn->query($consultaassis) or die($mysqli->error);

$consultaauto = "SELECT * FROM tbl_convenios WHERE tipo = 3 ORDER BY nome ASC";
$auto = $conn->query($consultaauto) or die($mysqli->error);

$consultaedu = "SELECT * FROM tbl_convenios WHERE tipo = 4 ORDER BY nome ASC";
$edu = $conn->query($consultaedu) or die($mysqli->error);

$consultaesta = "SELECT * FROM tbl_convenios WHERE tipo = 5 ORDER BY nome ASC";
$esta = $conn->query($consultaesta) or die($mysqli->error);

$consulimob = "SELECT * FROM tbl_convenios WHERE tipo = 6 ORDER BY nome ASC";
$imob = $conn->query($consulimob) or die($mysqli->error);

$consultalavand = "SELECT * FROM tbl_convenios WHERE tipo = 7 ORDER BY nome ASC";
$lavand = $conn->query($consultalavand) or die($mysqli->error);

$consultapsico = "SELECT * FROM tbl_convenios WHERE tipo = 8 ORDER BY nome ASC";
$psico = $conn->query($consultapsico) or die($mysqli->error);

$consultasaude = "SELECT * FROM tbl_convenios WHERE tipo = 9 ORDER BY nome ASC";
$saude = $conn->query($consultasaude) or die($mysqli->error);


?>

<main>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Alimentação.
    </blockquote>

    <?php while ($dado = $rest->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Assistência.
    </blockquote>

    <?php while ($dado = $assis->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Auto Escola.
    </blockquote>

    <?php while ($dado = $auto->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Educação.
    </blockquote>

    <?php while ($dado = $edu->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Estacionamento.
    </blockquote>

    <?php while ($dado = $esta->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Imobiliária.
    </blockquote>

    <?php while ($dado = $imob->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Lavanderias.
    </blockquote>

    <?php while ($dado = $lavand->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>
  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Psicólogo.
    </blockquote>

    <?php while ($dado = $psico->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
    <?php } ?>

  </div>

  <div class="container">

    <blockquote style="font-size: 18px; font-weight: bold;">
      Saúde e Beleza.
    </blockquote>

    <?php while ($dado = $saude->fetch_array()) { ?>
      <div class="card wow fadeInUp">
        <div class="card-image waves-effect waves-block waves-light">
          <?php echo '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
        </div>
        <div class="card-content">
          <span class="card-title" style="font-size: large; font-weight: normal;"><b><?php echo $dado['nome']; ?></b></span>
          <?php echo $dado['texto']; ?><p></p>
          <b>Vantagem: </b><?php echo $dado['vantagem']; ?><br>
          <b>Cidade: </b><?php echo $dado['cidade']; ?>
        </div>
      </div>
      <div class="divider"></div>
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