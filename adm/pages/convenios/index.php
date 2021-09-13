<?php
include_once '../../header.php';
include_once '../../footer.php';
include_once '../../navbar.php';
?>

<div class="container bg-branco p-3 bordered rounded">

  <form class="needs-validation" enctype="multipart/form-data" action="include/cadConvenio.php" method="POST" novalidate>
    <div class="form-row">

      <div class="col-md-5 mb-3">
        <label for="validationCustom01">Nome do Conveniado</label>
        <input type="text" class="form-control" name="nome" required>
        <div class="invalid-feedback">
          Favor preencher o nome do banco!
        </div>
      </div>

      <div class="col-md-2 mb-3">
        <label for="validationCustom01">Cidade</label>
        <select class="browser-default custom-select" name="cidade" required>
          <option selected></option>
          <option value="Nacional">Nacional</option>
          <option value="Curitiba">Curitiba</option>
          <option value="Fortaleza">Fortaleza</option>
          <option value="Maringá">Maringá</option>
        </select>
        <div class="invalid-feedback">
          Favor preencher o dia da semana do Evento!
        </div>
      </div>

      <div class="col-md-2 mb-3">
        <label for="validationCustom01">Tipo</label>
        <select class="browser-default custom-select" name="tipo" required>
          <option selected></option>
          <option value=1>Alimentação</option>
          <option value=2>Assistência</option>
          <option value=3>Auto Escola</option>
          <option value=4>Educação</option>
          <option value=5>Estacionamento</option>
          <option value=6>Imobiliária</option>
          <option value=7>Lavanderias</option>
          <option value=8>Psicólogo</option>
          <option value=9>Saúde e Beleza</option>
        </select>
        <div class="invalid-feedback">
          Favor preencher o dia da semana do Evento!
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Arquivo de Imagem do Conveniado</label>
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
    <div class="form-row">

      <div class="col-md-12 mb-3">
        <label for="exampleFormControlTextarea3">Texto sobre o Conveniado</label>
        <textarea class="form-control" id="exampleFormControlTextarea3" rows="2" name="texto"></textarea>
        <div class="invalid-feedback">
          Você deve informar uma descrição!
        </div>
      </div>

      <div class="col-md-12 mb-3">
        <label for="exampleFormControlTextarea3">Vantagem do Conveniado</label>
        <textarea class="form-control" id="exampleFormControlTextarea3" rows="2" name="vantagem" required></textarea>
        <small class="form-text text-muted">Descreva a vantagem do conveniado. Ex: 20% dinheiro / 10% crédito e débito</small>
        <div class="invalid-feedback">
          Você deve informar uma descrição!
        </div>
      </div>

    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Confirmar cadastro de banco
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
  if (isset($_SESSION['cadErro'])) {
    $result = '<div class="alert alert-danger">Erro ao cadastrar!</div>';
    echo '<br>' . $result;
    unset($_SESSION['cadErro']);
  }
  ?>
  <?php
  //Recuperando o valor da variável global, deslogado com sucesso.
  if (isset($_SESSION['cadOK'])) {
    $result = '<div class="alert alert-success">Cadastrado com sucesso!</div>';
    echo '<br>' . $result;
    unset($_SESSION['cadOK']);
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

<!--
<script>
  tinymce.init({
    selector: '#exampleFormControlTextarea3',
    height: 250,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  });
</script>
-->

<?php
if (isset($_FILES['img'])) {
  $ext = strtolower(substr($_FILES['img']['name'], -4)); //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
  $dir = './imagens/'; //Diretório para uploads 
  move_uploaded_file($_FILES['img']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
  echo ("Imagen enviada com sucesso!");
}
?>