<?php
session_start();

//Incluindo a conexão com banco de dados   
include_once 'conexao.php';

//O campo usuário e senha preenchido entra no if para validar
if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {

    //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $USUARIO = mysqli_real_escape_string($conn, $_POST['usuario']);
    $SENHA = mysqli_real_escape_string($conn, $_POST['senha']);
    $SENHA = sha1($SENHA);

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $result_usuario = "SELECT * FROM tbl_users WHERE user = '$USUARIO' && senha = '$SENHA' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    if (isset($resultado)) {
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioNivel'] = $resultado['nivel'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        if ($_SESSION['usuarioNivel'] >= "1") {
            header("Location: ../inicio.php");
        }
    } else {
        //Váriavel global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: ../index.php");
    }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../index.php");
}
