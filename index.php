<?php
	/* index.php */
	include  ('./cabecalho_nav.php');
?>

		<article>
		
            <div class="container-fluid colorblue">
				<div class="container">
					<div class="row">
						<h1 class="textwhite text-center">SportTeams</h1>
						<p class="textwhite text-center">SportTeams é um protótipo criado para pessoas que tem a necessidade de achar um time para participar de
						campeonatos ou até mesmo encontrar jogadores para o seu time. Foi criado após uma necessesidade de um dos desenvolvedores achar um time
                            para participar de um campeonato, então foi desenvolvida esta ferramenta para suprir a necessidade de nós, atletas.</p>

						<p class="text-center">
                            <a href="#"><i class="fa fa-facebook-square textwhite" style="font-size:50px !important; margin-right: 30px;"></i></a>
						    <a href="#"><i class="fa fa-twitter-square textwhite" style="font-size:50px !important;"></i></a>
						</p>
						
					</div>
				</div>
			</div>
			
            <br/>
			
            <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail thumbnail-inverse container-sport">
                      <img src="img/voleilogo.png" alt="Voleibol">
                      <div class="caption">
                        <h3 class="textwhite text-center">VOLEIBOL</h3>
                        <p class="textwhite2 text-center">Se você procura um time ou jogadores de voleibol, aqui é seu lugar.</p>
						<br/>
						<p class="text-center"><a href="jogadores_volei.php" class="btn btn-default" role="button">Jogadores</a> <a href="#" class="btn btn-default" role="button">Times</a></p>
                      </div>
                    </div>
                  </div>
				  
				  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail thumbnail-inverse container-sport">
                      <img src="img/futebollogo.png" alt="Futebol">
                      <div class="caption">
                        <h3 class="textwhite text-center">FUTEBOL</h3>
                        <p class="textwhite2 text-center">Se você procura um time ou jogadores de futebol, aqui é seu lugar.</p>
						<br/>
						<p class="text-center"><a href="jogadores_futebol.php" class="btn btn-default" role="button">Jogadores</a> <a href="#" class="btn btn-default" role="button">Times</a></p>
                      </div>
                    </div>
                  </div>
				  
				  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail thumbnail-inverse container-sport">
                      <img src="img/basquetelogo.png" alt="Basquete">
                      <div class="caption">
                        <h3 class="textwhite text-center">BASQUETE</h3>
                        <p class="textwhite2 text-center">Se você procura um time ou jogadores de basquete, aqui é seu lugar.</p>
						<br/>
						<p class="text-center"><a href="jogadores_basquete.php" class="btn btn-default" role="button">Jogadores</a> <a href="#" class="btn btn-default" role="button">Times</a></p>
                      </div>
                    </div>
                  </div>

            </div>
		</article>

        <?php

        if(isset($_GET['logado'])){?>

            <script type="application/javascript">

                alert("Usuário logado com sucesso!");
                window.location.href = "index.php";

            </script>

        <?php } ?>

        <?php

        if(isset($_GET['tcada'])){?>

            <script type="application/javascript">

                alert("Time cadastrado com sucesso!");
                window.location.href = "index.php";

            </script>

        <?php } ?>
		
<?php
	Include  ('./rodape_assinatura.php');
?>