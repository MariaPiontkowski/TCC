<?php
	session_start();
	require 'conexao.php';
	$_SESSION['autorizado'] = NULL;
	$email=$_POST['email'];
	$senha=sha1($_POST['senha']);
	$sql = mysql_query("SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
	$row = mysql_num_rows($sql);
	if($row > 0) {
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		$_SESSION['autorizado'] = 1;
	}else{
		$_SESSION['autorizado'] = 'erro';	
	}
	header('Location: index.php');
	
?>