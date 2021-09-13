<?php
include_once '../header.php';
include_once '../footer.php';
include_once '../conexao.php';

$qry = 'SELECT * FROM tbl_feriados ORDER BY data asc';
$sql = $conn->query($qry) or die($mysqli->error_reporting);

$hoje = date('Y-m-d');
$qryFeriado = "SELECT data FROM tbl_feriados WHERE data = '2020-01-01'";
$data = mysqli_query($conn, $qryFeriado);

while ($row = mysqli_fetch_array($data)) {
  $lista = date('Y-m-d', strtotime($row['data']));
}

?>

<main>

  <div class="container">
    <ul class="collection">
      <li class="collection-item active bg-danger-dark"><i class="far fa-calendar-alt"></i>&nbsp; Feriados 2020</li>
      <li class="collection-item bg-branco">

        <div class="row">

          <div class="col s5">
            <p></p>
            <img height="170px" src="img/bots/gahag-ok2.svg">
          </div>

          <div class="col s7">
            <blockquote>
              Oi! Aqui estão todos os feriados do ano de 2020. <br>
              Mas fique tranquilo, se houver alguma alteração, nós entramos em contato. 😉
            </blockquote>
          </div>
          <?php
          if ($lista == $hoje) {
            echo '<div class="collection"><a href="#!" class="collection-item active center"><i class="fas fa-child"></i> Hoje é feriado! <i class="fas fa-child"></i></a></div>';
          }
          ?>
        </div>

        <table class="striped">
          <thead>
            <tr>
              <th class="center-align">Data</th>
              <th class="center-align">Nome</th>
              <th class="center-align">Cidade</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($dado = $sql->fetch_array()) { ?>
              <tr>
                <td class="center-align"><?php echo date('d/m/Y ', strtotime($dado['data'])); ?></td>
                </td>
                <td class="center-align"><?php echo $dado['nome']; ?></td>
                <td class="center-align"><?php echo $dado['cidade']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
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