<html>

<head>
    <title>Convidando...</title>
</head>

<body>
<?php

    require 'conexao.php';

    if ($_POST) {
        $idTime = $_POST['seusTimes'];
        $id = $_POST['id_jogador'];

        $sql = "INSERT INTO time_usuarios
                  VALUES(NULL,'$id','$idTime');";

        mysqli_query($conexao, $sql);

		header('Location: jogadores_volei.php?convidado=1');

    }

?>
</body>
</html>
