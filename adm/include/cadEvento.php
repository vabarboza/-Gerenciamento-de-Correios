<?php
session_start();
require("conexao.php");

$nome = $_POST['nome'];
$texto = $_POST['texto'];
$data = $_POST['data'];
$dia = $_POST['dia'];
$cidade = $_POST['cidade'];

$imagem = $_FILES['img']['tmp_name'];
$tamanho = $_FILES['img']['size'];
$tipo = $_FILES['img']['type'];

if ($imagem != "none") {
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);
}

$QUERY = "INSERT INTO tbl_eventos (nome, data, dia, regiao, img, tipoFoto) 
    VALUES ('$nome', '$data', '$dia', '$cidade', '$conteudo', '$tipo')";

$SQL = mysqli_query($conn, $QUERY);

if (mysqli_affected_rows($conn) != 0) {
    $_SESSION['cadVarejoOK'] = "#";
    header("Location: /adm/pages/varejos/index.php");
} else {
    $_SESSION['cadVarejoErro'] = "#";
    header("Location: /adm/pages/varejos/index.php");
}
