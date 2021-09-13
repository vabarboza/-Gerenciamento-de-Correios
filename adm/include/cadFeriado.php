<?php
session_start();
//Criar a conexao
include_once 'conexao.php';


$DATA = mysqli_real_escape_string($conn, $_POST['data']);
$DIA = mysqli_real_escape_string($conn, $_POST['dia']);
$NOME = mysqli_real_escape_string($conn, $_POST['nome']);
$CIDADE = mysqli_real_escape_string($conn, $_POST['cidade']);

$QUERY = "INSERT INTO tbl_feriados (data, dia, nome, cidade) VALUES ('$DATA','$DIA','$NOME','$CIDADE')";
$SQL = mysqli_query($conn, $QUERY);

if (mysqli_affected_rows($conn) != 0) {
    $_SESSION['cadOK'] = "#";
    header("Location: /adm/pages/calendario/lista.php");
} else {
    $_SESSION['cadErro'] = "#";
    header("Location: /adm/pages/calendario/lista.php");
}
