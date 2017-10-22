<!DOCTYPE html>
<html>
     
	<head>
		<meta charset="utf-8">
		<title>SportsTeams</title>
	
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/style_cadastro.css" rel="stylesheet" type="text/css">
	</head>
  
	<body>
		<div class='container'>
		  <form class='form-register' method="POST" action="criacao.php">
			<h2 class="text-center">Cadastro SportTeams</h2> 
			<div class='form-group'>
			  <label>Usuario:</label>
			  <input type='text' name='c_usuario' placeholder='Nome de Usuario' title="Digite seu nome de Usuario.">
			</div>
			<div class='form-group'>
			  <label>Email:</label>
			  <input type='email' name='c_email' placeholder='Email de Cadastro' title="Digite seu Email.">
			</div>	
			<div class='form-group'>
			  <label>Confirme o Email:</label>
			  <input type='confirmemail' name='c_cemail' placeholder='Confirme o Email' title="Repita seu Email.">
			</div>		
			<div class='form-group'>
			  <label>Senha:</label>
			  <input type='password' name='c_senha' placeholder='Senha de Cadastro' title="Digite sua Senha.">
			</div>			
			<div class='form-group'>
			  <label>Confirme a Senha:</label>
			  <input type='password' name='c_csenha' placeholder='Confirme a senha' title="Repita sua Senha.">
			</div>
				<input type="submit" value="Cadastrar" class="btn btn-success botaoCadastro" />
		  </form>
		</div>
	</body>
</html>