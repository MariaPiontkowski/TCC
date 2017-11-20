<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
		$host = "localhost";
		$user = "root";
		$pass = "root";
		$banco = "sportteams";
		$conexao = mysqli_connect($host, $user, $pass, $banco);

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }