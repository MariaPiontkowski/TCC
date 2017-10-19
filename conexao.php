<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
		$host = "localhost";
		$user = "root";
		$pass = "root";
		$banco = "sportteams";
		$conexao = mysql_connect($host, $user, $pass) or die(mysql_error("Nao foi possivel conectar ao banco"));
		mysql_select_db($banco) or die(mysql_error("Nao foi possivel conectar ao banco"));
?>