<!DOCTYPE HTML>
<html>
     
  <head>
    <meta charset="utf-8">
    <title>SportsTeams</title>
	
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
                  <a class="navbar-brand" href="#"><img src="img/SportTeams_logo.png"></img></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
					<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user iconcolorblue"></i> Jogadores <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-angle-double-right iconcolorblue"></i> Voleibol</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right iconcolorblue"></i> Futebol</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right iconcolorblue"></i> Basquete</a></li>
                      </ul>
                    </li>
										
					<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users iconcolorblue"></i> Times <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-angle-double-right iconcolorblue"></i> Voleibol</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right iconcolorblue"></i> Futebol</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right iconcolorblue"></i> Basquete</a></li>
                      </ul>
                    </li>
					
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-id-card iconcolorblue"></i> Perfil <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user-circle iconcolorblue"></i> Seu Perfil</a></li>
                        <li><a href="#"><i class="fa fa-pencil iconcolorblue"></i> Editar Perfil</a></li>
                        <li><a href="#"><i class="fa fa-users iconcolorblue"></i> Times</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off iconcolorred"></i> Sair</a></li>
                      </ul>
                    </li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs iconcolorblue"></i> <b class="color-blue">Login</b> <span class="caret"></span></a>
					  <ul class="dropdown-menu login-panel">
						<li>
							<div class="dropdown-header">
								<span class="login-header iconcolorblack">Bem vindo Usuario.</span>
							</div>
							<div class="clearfix"></div>
							<div style="padding: 8px;">
								<form id="loginform" class="form-horizontal" role="form"  autocomplete="off">
									<div style="margin-bottom: 10px" class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user iconcolorblack"></i></span>
										
										<!-- usuario -->
										<input id="login-username" type="text" class="form-control" name="username" value="" title="Digite seu usuario.">                                        
									</div>
									<div style="margin-bottom: 10px" class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock iconcolorblack"></i></span>
										
										<!--  senha  -->
										<input id="login-password" type="password" class="form-control" name="password" title="Digite sua senha.">
									</div>
									<div class="center-text">
										<span class="forgot-password iconcolorblue"><a href="">Esqueceu sua senha?</a></span>
											<br/>
										<span class="forgot-password iconcolorblue"><a href="">Registre-se</a></span>
									</div>
									<div class="center-text">
										<span class="error-message iconcolorred"><i class="glyphicon glyphicon-warning-sign"></i> Usuario e senha invalidos!</span>
									</div>
									<div style="margin-top:10px" class="form-group">
										<!-- Button -->
										<div class="col-sm-12 controls center-text">
										  <a id="btn-login" href="#" class="btn btn-block btn-success">Login</a>

										</div>
									</div>  
								</form>
							</div>                
						</li>
                  </ul>
                </div>
            </nav>
            </div>
		</header>
