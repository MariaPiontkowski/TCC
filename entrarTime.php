<?php
    require 'conexao.php';
    session_start();

    if($_POST){
        $idTime = $_POST['id_Time'];
        $usuarioId = $_SESSION['id_usuario'];
        $verificar = "SELECT * FROM time_usuarios WHERE fk_usuario = '$usuarioId' AND fk_time = '$idTime';";

        $resultado = mysqli_query($conexao, $verificar);

        if($resultado->num_rows > 0){
            $sql = "INSERT INTO time_usuarios VALUES (NULL, '$usuarioId', '$idTime');";
            // mysqli_query($conexao, $sql);
            header('Location: times_volei.php?entrou=1');
        }else{
            header('Location: times_volei.php?falha=1');
        }

    }
?>