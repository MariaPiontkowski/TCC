<?php
	session_start();
	require 'conexao.php';
	$_SESSION['autorizado'] = NULL;
	$email=$_POST['email'];
	$senha=sha1($_POST['senha']);
	$sql = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
	$resultado = mysqli_fetch_array($sql);
	$row = mysqli_num_rows($sql);
	if($row > 0) {
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		$_SESSION['id'] = $resultado['id'];
		$_SESSION['autorizado'] = 1;
	}else{
		$_SESSION['autorizado'] = 'erro';	
	}
	header('Location: index.php?logado=1');
	
?>