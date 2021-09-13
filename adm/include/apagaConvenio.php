<?php
session_start();
//Criar a conexao
include_once 'conexao.php';


$id_arquivo = $_GET["id"];
// Salva o IP do visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Salva o ID do usuario Logado
$iduser = $_SESSION['usuarioId'];

//Query de exlusão do registo na DB
$apaga = mysqli_query($conn, "DELETE FROM tbl_convenios WHERE id = $id_arquivo");

if (mysqli_affected_rows($conn) != 0) {
    $_SESSION['apagaOK'] = "Apagar OK";
    header("Location: /adm/pages/convenios/lista.php");
} else {
    $_SESSION['apagaErro'] = "Apagar Erro";
    header("Location: /adm/pages/convenios/lista.php");
}
/*
Salva no tabela Logs o registro de exclusão do regitro
Captura: Hora, IP, Acão, Id do Usuario logado, Tipo de dado e ID do registro.

Ações:
1 - Deletes

Tipo de dado:
1 - Correio
2 - Malote
3 - Material
4 - Usuario
*/
//$log = mysqli_query($conn, "INSERT into logs (hora,ip,action,iduser,modulo,ref_id) values (NOW(),'$ip',1,'$iduser',2,'$id_arquivo')");

//Retorno da Query
//if (mysqli_affected_rows($conn) != 0) {
//    $_SESSION['cadOK'] = "#";
//    header("Location: /pages/malote/relatorio.php");
//} else {
//    $_SESSION['cadErro'] = "#";
//    header("Location: /pages/malote/relatorio.php");
//}