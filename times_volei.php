<?php
include('./cabecalho_nav.php');
?>

<div class="container">
    <?php

    require 'conexao.php';

    $sql = "
        SELECT 
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

        </div>

    <?php } ?>
</div>

<?php
Include  ('./rodape_assinatura.php');
?>