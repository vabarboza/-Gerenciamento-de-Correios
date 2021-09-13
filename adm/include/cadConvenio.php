<?php
session_start();
require("conexao.php");

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$texto = $_POST['texto'];
$vantagem = $_POST['vantagem'];
$tipoconv = $_POST['tipo'];


$imagem = $_FILES['img']['tmp_name'];
$tamanho = $_FILES['img']['size'];
$tipo = $_FILES['img']['type'];

if ($imagem != "none") {
  $fp = fopen($imagem, "rb");
  $conteudo = fread($fp, $tamanho);
  $conteudo = addslashes($conteudo);
  fclose($fp);
}


$QUERY = "INSERT INTO tbl_convenios (nome, cidade, tipo, img, tipoImg, texto, vantagem) 
    VALUES ('$nome', '$cidade', '$tipoconv', '$conteudo', '$tipo', '$texto', '$vantagem')";
$SQL = mysqli_query($conn, $QUERY);





if (mysqli_affected_rows($conn) != 0) {
  $_SESSION['cadOK'] = "#";
  header("Location: /adm/pages/convenios/index.php");
} else {
  $_SESSION['cadErro'] = "#";
  header("Location: /adm/pages/convenios/index.php");
}
