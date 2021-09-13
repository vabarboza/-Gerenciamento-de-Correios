<?php
include_once '../../header.php';
include_once '../../footer.php';
include_once '../../navbar.php';
?>

<div class="container bg-branco p-3 bordered rounded">

  <form class="needs-validation" enctype="multipart/form-data" action="include/cadEvento.php" method="POST" novalidate>

    <div class="form-row">

      <div class="col-md-9 mb-3">
        <label for="validationCustom01">Nome do Evento</label>
        <input type="text" class="form-control" name="nome" required>
        <div class="invalid-feedback">
          Favor preencher o nome do Evento!
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Data do Evento</label>
        <input type="date" class="form-control" name="data" required>
        <div class="invalid-feedback">
          Favor preencher data do Evento!!
        </div>
      </div>

    </div>

    <div class="form-row">

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Dia do Evento</label>
        <select class="browser-default custom-select" name="dia" required>
          <option selected></option>
          <option value="Segunda-Feira">Segunda-Feira</option>
          <option value="Terça-Feira">Terça-Feira</option>
          <option value="Quarta-Feira">Quarta-Feira</option>
          <option value="Quinta-Feira">Quinta-Feira</option>
          <option value="Sexta-Feira">Sexta-Feira</option>
          <option value="Sabado">Sabado</option>
          <option value="Domingo">Domingo</option>
        </select>
        <div class="invalid-feedback">
          Favor preencher o dia da semana do Evento!
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Região do Evento</label>
        <select class="browser-default custom-select" name="cidade" required>
          <option selected></option>
          <option value="Nacional">Nacional</option>
          <option value="Curitiba">Curitiba</option>
          <option value="Fortaleza">Fortaleza</option>
          <option value="Maringá">Maringá</option>
        </select>
        <div class="invalid-feedback">
          Favor preencher a região do Evento!
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Arquivo de Imagem</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileLang" lang="pt" name="img" accept="image/*">
          <label class="custom-file-label" for="customFileLang"></label>
          <small class="form-text text-muted">Tamanho da imagem: 648 x 300</small>
        </div>
        <div class="invalid-feedback">
          Você deve informar uma imagem valida!
        </div>
      </div>

    </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Confirmar cadastro do Evento.
        </label>
        <div class="invalid-feedback">
          Você deve confirmar o cadastro!
        </div>
      </div>
    </div>
    <button class="btn btn-dark-green btn-redondo btn-sm" type="submit"><i class="fas fa-save"></i>&nbsp; Salvar</button>
  </form>

  <?php
  //Recuperando o valor da variável global, os erro de login.
  if (isset($_SESSION['cadVarejoErro'])) {
    $result = '<div class="alert alert-danger">Erro ao cadastrar!</div>';
    echo '<br>' . $result;
    unset($_SESSION['cadVarejoErro']);
  }
  ?>
  <?php
  //Recuperando o valor da variável global, deslogado com sucesso.
  if (isset($_SESSION['cadVarejoOK'])) {
    $result = '<div class="alert alert-success">Cadastrado com sucesso!</div>';
    echo '<br>' . $result;
    unset($_SESSION['cadVarejoOK']);
  }
  ?>
</div>

<script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>