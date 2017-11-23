<?php
include('./cabecalho_nav.php');
?>

<div class="container">
    <?php

    require 'conexao.php';

    $sql = "
        SELECT 
        t.id,
        t.nome_time,
        t.time_esporte,
        t.cidade_time,
        t.estado_time,
        t.imagem_time
        FROM 
            time t
        WHERE t.time_esporte = 'Volei';";

    $sqlResult = mysqli_query($conexao, $sql);
    while ($arrayUsuario = mysqli_fetch_assoc($sqlResult)) {
        ?>
        <div class="row">
            <div  class="col-md-10 jogador">
                <div style="float:left;">
                    <img src="<?php echo 'img/uploads/times/'.$arrayUsuario['imagem_time'];?>" alt="Emblema do Time" height="110" width="110">
                </div>
                <div class="div_info_margin">
                    <h3><?php echo $arrayUsuario['nome_time'] ?> - <?php echo $arrayUsuario['time_esporte'] ?></h3>
                    <p>Cidade: <?php echo $arrayUsuario['cidade_time'] ?></p>
                    <p>Estado: <?php echo $arrayUsuario['estado_time'] ?></p>
                </div>
            </div>

            <div class="col-md-8 info_jogador" ">
            <form method="POST" action="entrarTime.php">
                <label class="col-md-5 col-offset-md-2" style="margin-top: 10px;">Deseja entrar para este Time?</label>
                <input type="hidden" name="id_Time" value="<?=$arrayUsuario['id'];?>">
                <input type="hidden" name="id_Usuario" value="<?=$usuarioId?>">
                <input type="submit" value="Entrar" class="col-md-2" style="margin-top: 10px; color: black; height: 26px; margin-left: 50px; float: left;">

            </form>
        </div>

        </div>

    <?php } ?>
</div>

<?php
Include  ('./rodape_assinatura.php');
?>
