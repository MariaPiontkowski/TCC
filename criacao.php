<html>

<head>
	<title>Cadastrando...</title>
</head>

<body>
	<?php
		require 'conexao.php';

		$nome=$_POST['c_usuario'];
		$email=$_POST['c_email'];
		$senha=sha1($_POST['c_senha']);
		$sql = mysql_query("INSERT INTO usuario(nome, email, senha, tp_usuario)
				VALUES('$nome', '$email', '$senha', '1')");
				
				header('location: index.php');
		
	?>
</body>
</html>