<html>

<head>
    <title>Cadastrando...</title>
</head>

<body>
<?php
require 'conexao.php';

if ($_POST) {
    $nascimento = $_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];
    $senha = sha1($_POST['senha']);
    $altura = str_replace(',', '.', $_POST['altura']);
    $peso = str_replace(',', '.', $_POST['peso']);



    $sql = "CALL sp_in_usuario(
                '".$_POST['nome']."',
                '".$_POST['email']."',
                '".$senha."',
                ".$peso.",
                ".$altura.",
                '".$_POST['sexo']."',
                '".$nascimento."',
                '".ucfirst(strtolower($_POST['estado']))."',
                '".ucfirst(strtolower($_POST['cidade']))."',
                '".$_POST['volei']."',
                '".$_POST['basquete']."',
                '".$_POST['futebol']."'
               );";

    mysql_query($sql);

    session_start();

    $_SESSION['email']=$_POST['email'];
    $_SESSION['senha']=$_POST['senha'];
    $_SESSION['autorizado'] = 1;

    header('location: index.php');

}


?>
</body>
</html>