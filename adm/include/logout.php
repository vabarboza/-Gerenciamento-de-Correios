<?php
session_start();
unset($_SESSION['usuarioId'],
$_SESSION['usuarioNome'],
$_SESSION['usuarioNivel'],
$_SESSION['usuarioEmail'],
$_SESSION['cadOK'],
$_SESSION['cadErro']);
$_SESSION['logindeslogado'] = "Deslogado com sucesso";
//redirecionar o usuario para a página de login
header("Location: ../index.php");
