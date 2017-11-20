<?php
include('./valida_login.php');
include('./cabecalho_nav.php');
?>

<div class="container">
    <?php

    require 'conexao.php';

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
            tu.fk_usuario,
            tu.fk_time 
        FROM
            usuario u
            INNER JOIN usuario_info ui ON ui.id_usuario = u.id
            INNER JOIN usuario_esporte ue ON ue.id_usuario = u.id
            INNER JOIN time_usuarios tu ON tu.fk_usuario = u.id 
        WHERE	ue.posicao_volei <> 'NULL' 
        GROUP BY u.id;";

    $sqlInvite = "
                SELECT
                  tu.fk_usuario,
                  tu.fk_time,
                  t.id,
                  t.nome_time,
                  t.time_esporte,
                  u.id
                FROM
                  time_usuarios tu
                INNER JOIN time t ON tu.fk_time = t.id
                INNER JOIN usuario u ON tu.fk_usuario = u.id
                WHERE t.time_esporte = 'Volei' AND tu.fk_usuario = '$usuario';";

    $sqlResult2 = mysqli_query($conexao, $sql);
    while ($arrayUsuario = mysqli_fetch_assoc($sqlResult2)) {
        ?>
        <div class="row">
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

            <div class="col-md-8 info_jogador" style="float:right;">
                <form method="POST" action="convidarJogador.php">
                    <p class="text-center">Convidar para time:</p>
                    <select name="seusTimes" class="form-control">
                        <option value=""> -- Selecione --</option>
                        <?php
                        $sqlResult = mysqli_query($conexao, $sqlInvite);
                        while ($arrayConvidar = mysqli_fetch_assoc($sqlResult)) { ?>
                            <option value="<?php echo $arrayConvidar['id']; ?>"> <?php echo $arrayConvidar['nome_time']; ?></option>
                        <?php } ?>
                    </select>
                </form>

            </div>
        </div>

    <?php } ?>
</div>

<?php
Include('./rodape_assinatura.php');
?>
