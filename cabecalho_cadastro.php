<?php
	session_start();
	
	if(!isset($_SESSION['autorizado'])){
		$_SESSION['autorizado'] = NULL;
	}else{
        header('Location: index.php');
    }
?>

<!DOCTYPE HTML>
<html>
     
  <head>
    <meta charset="utf-8">
    <title>SportsTeams</title>

    <link rel="shortcut icon" href="img/futebollogo.png" >
	
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|PT+Sans+Narrow" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  </head>
     
  <body>
		<header>
            <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container-fluid navbar-border">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="index.php"><img src="img/SportTeams_logo.png"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                </div>
            </nav>
            </div>
		</header>
