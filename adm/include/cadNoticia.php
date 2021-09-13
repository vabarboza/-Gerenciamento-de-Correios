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

$QUERY = "INSERT INTO tbl_noticiais (img, nome, texto) 
    VALUES ('$conteudo', '$nome' , '$texto')";

$SQL = mysqli_query($conn, $QUERY);

if (mysqli_affected_rows($conn) != 0) {
    $_SESSION['cadNoticiaOK'] = "#";
    header("Location: /adm/pages/noticias/index.php");
} else {
    $_SESSION['cadNoticiaErro'] = "#";
    header("Location: /adm/pages/noticias/index.php");
}
