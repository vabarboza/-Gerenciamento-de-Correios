<?php
session_start();
require("conexao.php");

$nome = $_POST['nome'];
$texto = $_POST['texto'];

$imagem = $_FILES['img']['tmp_name'];
$tamanho = $_FILES['img']['size'];
$tipo = $_FILES['img']['type'];

if ($imagem != "none") {
  $fp = fopen($imagem, "rb");
  $conteudo = fread($fp, $tamanho);
  $conteudo = addslashes($conteudo);
  fclose($fp);
}

$QUERY = "INSERT INTO tbl_varejo (nome, img, texto, tipoFoto) 
    VALUES ('$nome', '$conteudo', '$texto', '$tipo')";

$SQL = mysqli_query($conn, $QUERY);

if (mysqli_affected_rows($conn) != 0) { 
  $_SESSION['cadVarejoOK'] = "Cadastro OK";
  header("Location: /adm/pages/varejos/index.php");
} else {
  $_SESSION['cadVarejoErro'] = "Cadastro Falhou";
  header("Location: /adm/pages/varejos/index.php");
}
