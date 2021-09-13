<?php
include_once 'header.php';
include_once 'footer.php';
error_reporting(0);
if ($_SESSION['usuarioId'] != 0) {
  header('Location: inicio.php');
  exit();
}
?>

<div style="height: 100vh">
  <div class="flex-center flex-column">

    <div class="p-4 bd-highlight">
      <div class="container bg-white rounded shadow-md animated fadeIn slow">
        <table class="table table-borderless" style=" width: 400px">
          <tbody>
            <tr>
              <td>
                <form method="POST" action="include/valida_login.php">
                  <img src="img/toponew.png" class="responsive-img rounded mx-auto d-block" style="width: 150px">
                  <div class="form-group text-center">
                    <label for="exampleInputEmail1"><strong> Usuario </strong></label>
                    <input type="text" class="form-control" name="usuario" placeholder="Seu C.P.F" required>
                    <small id="emailHelp" class="form-text text-muted">Para efetuar o login no sistema utilize o seu
                      CPF.</small>
                  </div>
                  <div class="form-group text-center">
                    <label for="exampleInputPassword1"><strong> Senha </strong></label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                  </div>
                  <button type="submit" class="btn btn-success btn-sm btn-block">Entrar</button>
                  <div class="form-group text-center">
                    <br>
                    <p>
                      <?php
                      //Recuperando o valor da variável global, os erro de login.
                      if (isset($_SESSION['loginErro'])) {
                        $result = '<div class="alert alert-danger">Usuario ou Senha incorretos!</div>';
                        echo $result;
                        unset($_SESSION['loginErro']);
                      }
                      ?>
                      <?php
                      //Recuperando o valor da variável global, deslogado com sucesso.
                      if (isset($_SESSION['logindeslogado'])) {
                        $result = '<div class="alert alert-success">Deslogado com sucesso!</div>';
                        echo $result;
                        unset($_SESSION['logindeslogado']);
                      }
                      ?>
                  </div>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

</body>

</html>