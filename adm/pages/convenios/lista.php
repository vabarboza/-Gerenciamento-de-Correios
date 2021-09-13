<?php
include_once '../../header.php';
include_once '../../footer.php';
include_once '../../navbar.php';
include_once('../../include/conexao.php'); // banco de dados
$qry = 'SELECT * FROM tbl_convenios ORDER BY nome ASC';
$result = $conn->query($qry) or die($mysqli->error);
?>

<div class="container bg-branco p-3 bordered rounded">

  <fieldset class="border p-1">
    <legend class="w-auto">
      <h6 class="font-weight-bold">Relatorio de Feriados</h6>
    </legend>
    <div class="container">
      <table id="paginationSimpleNumbers" class="table table-hover table-sm p-2 btn-table" width="100%">
        <thead>
          <tr>
            <th class="th-sm">Nome
            </th>
            <th class="th-sm">Cidade
            </th>
            <th class="th-sm">Tipo
            </th>
            <th class="th-sm">Texto
            </th>
            <th class="th-sm">Vantagem
            </th>
            <th class="th-sm">Imagem
            </th>
            <th class="th-sm">Ação
            </th>
          </tr>
        </thead>
        <tbody>
          <?php while ($dado = $result->fetch_array()) { ?>
            <tr>
              <td><?php echo $dado['nome']; ?></td>
              <td><?php echo $dado['cidade']; ?></td>
              <td>
                <?php
                if ($dado['tipo'] == 1) {
                  echo 'Alimentação';
                } elseif ($dado['tipo'] == 2) {
                  echo 'Assistência';
                } elseif ($dado['tipo'] == 3) {
                  echo 'Auto Escola';
                } elseif ($dado['tipo'] == 4) {
                  echo 'Educação';
                } elseif ($dado['tipo'] == 5) {
                  echo 'Estacionamento';
                } elseif ($dado['tipo'] == 6) {
                  echo 'Imobiliária';
                } elseif ($dado['tipo'] == 7) {
                  echo 'Lavanderias';
                } elseif ($dado['tipo'] == 8) {
                  echo 'Psicólogo';
                } elseif ($dado['tipo'] == 9) {
                  echo 'Saúde e Beleza';
                }

                ?>
              </td>
              <td><?php echo $dado['texto']; ?></td>
              <td><?php echo $dado['vantagem']; ?></td>
              <td>
                <?php echo '<img class="figure-img" height="60" src="data:image/png;base64,' . base64_encode($dado['img']) . '"/>'; ?>
              </td>
              <td>
                <button type="button" class="btn btn-red btn-sm m-0 btn-redondo" data-href="include/apagaConvenio.php?id=<?php echo $dado['id']; ?>" data-toggle="modal" data-target="#confirm-delete">
                  <i class=" fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </fieldset>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <br><br>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header danger-color-dark">
        <h5 class="modal-title white-text text"><i class="fas fa-exclamation-triangle"></i>
          Atenção !!!</h5>
      </div>
      <div class="modal-body">
        Deseja excluir o registo selecionado?<br>
        Esta ação não pode ser revertida.<br>
        Esta ação ficara registrada para futuras consultas !<br><br>
        Usuario responsavel pela exclusão: <p class="text-danger font-italic font-weight-bold"><?php echo $_SESSION['usuarioNome']; ?><p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-indigo" data-dismiss="modal"><i class="fas fa-sign-out-alt"></i> Cancelar</button>
        <a class="btn btn-red btn-ok"><i class="fas fa-trash-alt"></i> Confirmar</a>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    //Pagination numbers
    $('#paginationSimpleNumbers').DataTable({
      "pagingType": "simple_numbers"
    });
  });
</script>

<script>
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
</script>