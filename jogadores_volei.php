<?php
include('./cabecalho_nav.php');
include('./valida_login.php');
?>

<div class="container">
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "sportteams";

    $con = mysqli_connect($host, $user, $pass, $banco);

    $sql = "SELECT
            u.id,
            u.nome,
            u.email,
            u.imagem,
            ui.peso,
            ui.altura,
            ui.sexo,
            ui.data_nasc,
            ui.estado,
            ui.cidade,
            ue.posicao_volei,
			ue.id_usuario
        FROM
            usuario u
            INNER JOIN usuario_info ui ON ui.id_usuario = u.id
            INNER JOIN usuario_esporte ue ON ue.id_usuario = u.id
        WHERE	ue.posicao_volei <> 'NULL' 
        GROUP BY u.id;";

    $sqlInvite = "
                SELECT
                  tu.fk_usuario,
                  tu.fk_time,
                  t.id as 'id_time',
                  t.nome_time,
                  t.time_esporte,
                  u.id as 'id_usuario'
                FROM
                  time_usuarios tu
                INNER JOIN time t ON tu.fk_time = t.id
                INNER JOIN usuario u ON tu.fk_usuario = u.id
                WHERE t.time_esporte = 'Volei' AND tu.fk_usuario = '$usuarioId';";

    $sqlResult2 = mysqli_query($con, $sql);
    while ($arrayUsuario = mysqli_fetch_assoc($sqlResult2)) {
        ?>
        <div class="row">
            <?php
                if($arrayUsuario['id'] !== $usuarioId) { ?>
            <div class="col-md-10 jogador">
                <div style="float:left;">
                    <img src="<?php echo 'img/uploads/' . $arrayUsuario['imagem']; ?>" alt="Imagem do Jogador"
                         height="110" width="110">
                </div>
                <div class="div_info_margin">
                    <h3><?php echo $arrayUsuario['nome'] ?> - <?php echo $arrayUsuario['posicao_volei'] ?></h3>
                    <p>Altura: <?php echo $arrayUsuario['altura'] ?>m</p>
                    <p>Peso: <?php echo $arrayUsuario['peso'] ?>kg</p>
                </div>
            </div>

            <div class="col-md-8 info_jogador" ">
                <form method="POST" action="convidarJogador.php">
					<label for="seusTimes" class="col-md-3 col-offset-md-1" style="margin-top: 10px;">Convidar para time</label>
                    <select name="seusTimes" class=" col-md-5" style="margin-top: 10px; color: black;">
                        <?php
                        $sqlResult = mysqli_query($con, $sqlInvite);
                        while ($arrayConvidar = mysqli_fetch_assoc($sqlResult)) { ?>
                            <option value="<?php echo $arrayConvidar['id_time']; ?>"> <?php echo $arrayConvidar['nome_time']; ?></option>
							
                        <?php } ?>
                    </select>
					<input type="hidden" name="id_jogador" value="<?=$arrayUsuario['id'];?>">
					<input type="submit" value="Convidar" class="col-md-2 col-offset-md-1" style="margin-top: 10px; color: black; height: 26px; margin-left: 50px;">

                </form>
            </div>
        </div>

    <?php }
    }
    ?>
</div>

<script type="application/javascript">

        <?php
        if(isset($_GET['convidado'])){
        $message = $_GET['convidado'] == 1 ? "Usuário convidado com sucesso!" : "Falha"; 
		?>
		
        alert("<?php echo $message ?>");
        window.location.href = "jogadores_volei.php";
        
		<?php } ?>
</script>
<?php
Include('./rodape_assinatura.php');
?>
