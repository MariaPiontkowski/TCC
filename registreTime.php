<html>

<head>
    <title>Cadastrando...</title>
</head>

<body>

<?php
    session_start();

    $email = $_SESSION['email'];
    $senha = sha1($_SESSION['senha']);

    require 'conexao.php';

    $sqlId = "SELECT id FROM usuario WHERE email='$email' AND senha='$senha';";
    $sqlResult = mysqli_query($conexao, $sqlId);
    $usuarioId = mysqli_fetch_assoc($sqlResult);
    $usuarioId = $usuarioId['id'];

if ($_POST) {
    $time = $_POST['nomeTime'];
    $tipo_esporte = $_POST['esporteTime'];
    $estado = $_POST['nomeEstado'];
    $cidade = $_POST['nomeCidade'];

    $extensao = strtolower(substr($_FILES['pic']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "./img/uploads/times/$novo_nome";

    move_uploaded_file($_FILES['pic']['tmp_name'], $diretorio);

    $sql = "INSERT INTO time VALUES
                (NULL,'$time', '$estado', '$cidade', '$tipo_esporte', '$novo_nome', '$usuarioId');";

    mysqli_query($conexao, $sql);

    header ('Location: index.php?tcada=1');
}


