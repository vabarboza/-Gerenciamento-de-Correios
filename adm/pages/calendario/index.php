<?php
include_once '../../header.php';
include_once '../../footer.php';
include_once '../../navbar.php';
?>

<div class="container bg-branco p-3 bordered rounded">

  <form class="needs-validation" action="include/cadFeriado.php" method="post" novalidate>

    <div class="form-row">

      <div class="col-md-9 mb-3">
        <label for="validationCustom01">Nome do Feriado</label>
        <input type="text" class="form-control" name="nome" required>
        <div class="invalid-feedback">
          Favor preencher o nome do feriado!
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Data do Feriado</label>
        <input type="date" class="form-control" name="data" required>
        <div class="invalid-feedback">
          Favor preencher data do feriado!!
        </div>
      </div>

    </div>

    <div class="form-row">

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Dia do Feriado</label>
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
          Favor preencher o dia da semana do feriado!
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Região do Feriado</label>
        <select class="browser-default custom-select" name="cidade" required>
          <option selected></option>
          <option value="Nacional">Nacional</option>
          <option value="Curitiba">Curitiba</option>
          <option value="Fortaleza">Fortaleza</option>
          <option value="Maringá">Maringá</option>
        </select>
        <div class="invalid-feedback">
          Favor preencher a região do feriado!
        </div>
      </div>

    </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Confirmar cadastro do feriado.
        </label>
        <div class="invalid-feedback">
          Você deve confirmar o cadastro!
        </div>
      </div>
    </div>
    <button class="btn btn-dark-green btn-redondo btn-sm" type="submit"><i class="fas fa-save"></i>&nbsp; Salvar</button>
  </form>

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