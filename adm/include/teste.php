<?php
include_once '../header.php';
include_once '../footer.php';
include_once '../navbar.php';
include_once 'conexao.php'; // banco de dados

$qry = 'SELECT * FROM tbl_bancos WHERE id = 13 ';
$result = $conn->query($qry) or die($mysqli->error);
?>

<div class="container">

  <?php while ($dado = $result->fetch_array()) {
    echo '<td>' .
      '<img src="data:image/png;base64,' . base64_encode($dado['img']) . '" width="50px" height="50px" />'
      . '</td>';
  } ?>

</div>