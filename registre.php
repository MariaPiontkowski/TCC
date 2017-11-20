<html>

<head>
    <title>Cadastrando...</title>
</head>

<body>
<?php
require 'conexao.php';
    error_reporting(E_ALL);
    if ($_POST) {
        $nascimento = $_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];
        $senha = sha1($_POST['senha']);
        $altura = str_replace(',', '.', $_POST['altura']);
        $peso = str_replace(',', '.', $_POST['peso']);

        $extensao = strtolower(substr($_FILES['pic']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "./img/uploads/$novo_nome";

        move_uploaded_file($_FILES['pic']['tmp_name'], $diretorio);

    $sql = "CALL sp_in_usuario(
                '" . $_POST['nome'] . "',
                '" . $_POST['email'] . "',
                '" . $senha . "',
                '" . $novo_nome . "',
                " . $peso . ",
                " . $altura . ",
                '" . $_POST['sexo'] . "',
                '" . $nascimento . "',
                '" . ucfirst(strtolower($_POST['estado'])) . "',
                '" . ucfirst(strtolower($_POST['cidade'])) . "',
                '" . $_POST['volei'] . "',
                '" . $_POST['basquete'] . "',
                '" . $_POST['futebol'] . "'
               );";

    mysql_query($sql);

    session_start();

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    $_SESSION['autorizado'] = 1;

    header('location: index.php?logado=1');

}


?>
</body>
</html>