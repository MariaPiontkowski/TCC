<html>

<head>
	<title>Cadastrando...</title>
</head>

<body>
	<?php
		require 'conexao.php';

		if($_POST) {
            $nascimento = $_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];
            $senha = sha1($_POST['senha']);
            $altura = str_replace(',', '.', $_POST['altura']);

            var_dump($_POST);
            var_dump($altura);
            var_dump($nascimento);


            /*$nome=$_POST['c_usuario'];
            $email=$_POST['c_email'];
            $senha=sha1($_POST['c_senha']);
            $sql = mysql_query("INSERT INTO usuario(nome, email, senha, tp_usuario)
                    VALUES('$nome', '$email', '$senha', '1')");

                    header('location: index.php');*/

            $sql_usuario = "INSERT INTO usuario VALUES(
              NULL, 
              " . $_POST['nome'] . ",
              " . $_POST['email'] . ",
              " . $senha . "
              ) ";
        }

		
	?>
</body>
</html>