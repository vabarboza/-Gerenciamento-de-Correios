<?php
include_once('../header.php');
include_once('../footer.php');
include_once('../conexao.php');

$qry = 'SELECT * FROM tbl_telefones';
$sql = $conn->query($qry) or die($mysqli->error);

?>
<main>
  <div class="container">
    <ul class="collection">
      <li class="collection-item active bg-danger-dark"><i class="fas fa-phone-alt"></i>&nbsp; Telefones de Contato</li>
      <li class="collection-item bg-branco">

        <div class="row">

          <div class="col s5">
            <p></p>
            <img height="170px" src="img/bots/gahag-ok2.svg">
          </div>

          <div class="col s7">
            <blockquote>
              Oi! Aqui estão todos os telefones que você possa precisar. <br>
              Se ainda tiver alguma dúvida que eu não consiga ajudar, entre em contato que vamos tentar te ajudar.😉
            </blockquote>
          </div>

        </div>

        <table class="striped">
          <thead>
            <tr>
              <th>Departamento</th>
              <th class="right-align">Telefone</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($dado = $sql->fetch_array()) { ?>
              <tr>
                <td><a href="tel:<?php echo $dado['numero']; ?>"><?php echo $dado['dpto']; ?></a></td>
                </td>
                <td class="right-align"><?php echo $dado['fone']; ?></td>
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