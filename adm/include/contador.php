<?php

include_once 'conexao.php';

if ($RESULT = $conn->query("SELECT * FROM tbl_bancos")) {
    $CONTADOR = $RESULT->num_rows;
    $NUMEROBANCO = $CONTADOR;
    $RESULT->close();
}

if ($RESULT = $conn->query("SELECT * FROM tbl_varejo")) {
    $CONTADOR = $RESULT->num_rows;
    $NUMEROVAREJO = $CONTADOR;
    $RESULT->close();
}

if ($RESULT = $conn->query("SELECT * FROM tbl_convenios")) {
    $CONTADOR = $RESULT->num_rows;
    $CONVENIOS = $CONTADOR;
    $RESULT->close();
}


$QRY = 'SELECT * FROM tbl_mensagem ORDER BY id desc LIMIT 1';
$NOTICIAS = $conn->query($QRY) or die($mysqli->error);
