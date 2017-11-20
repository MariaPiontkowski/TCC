<?php
include  ('./cabecalho_nav.php');

$email = $_SESSION['email'];
$senha = sha1($_SESSION['senha']);

require 'conexao.php';

$sql = "SELECT             
					t.id,
                    t.nome_time,
                    t.time_esporte,
                    t.estado_time,
                    t.cidade_time,
                    t.imagem_time,
                    t.fk_usuario,
                    u.id,
                    u.nome,
                    u.imagem,
                    u.email,
                    u.senha,
                    ue.posicao_volei,
                    ue.posicao_basquete,
                    ue.posicao_futebol
                FROM time t
                INNER JOIN usuario u ON u.id = t.fk_usuario
                INNER JOIN usuario_esporte ue ON ue.id_usuario = u.id	
                WHERE u.email = '$email' AND u.senha = '$senha';";

$sqlResult = mysqli_query($conexao, $sql);
while ($arrayUsuario = mysqli_fetch_assoc($sqlResult)) {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informações do Time</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="Imagem de Usuario" src="<?php echo 'img/uploads/times/'.$arrayUsuario['imagem_time'];?>" height="300" width="300" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Nome do Time:</td>
                                    <td><?php echo $arrayUsuario['nome_time'] ?></td>
                                </tr>
                                <tr>
                                    <td>Esporte do Time:</td>
                                    <td><?php echo $arrayUsuario['time_esporte'] ?></td>
                                </tr>
                                <tr>
                                    <td>Local do Time:</td>
                                    <td><?php echo $arrayUsuario['cidade_time'].' - '.$arrayUsuario['estado_time']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h3 class="panel-title">Informações do Dono:</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="Imagem de Usuario" src="<?php echo 'img/uploads/'.$arrayUsuario['imagem'];?>" height="80" width="80" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Nome:</td>
                                    <td><?php echo $arrayUsuario['nome'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?php echo $arrayUsuario['email'] ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h3 class="panel-title">Jogadores do Time:</h3>
                    </div>
                    <div class="panel-body">
                        <div class=" col-md-12 col-lg-12 ">
                            <table border="1" class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td style="font-weight: bold">Nome:</td>
                                    <td><?php echo $arrayUsuario['nome'] ?></td>
                                    <td style="font-weight: bold">Posição:</td>
                                    <td><?php
                                            if($arrayUsuario['time_esporte'] == 'Volei'){
                                                echo $arrayUsuario['posicao_volei'];

                                            } elseif($arrayUsuario['time_esporte'] == 'Basquete'){
                                                echo $arrayUsuario['posicao_basquete'];

                                            } elseif($arrayUsuario['time_esporte'] == 'Futebol'){
                                                echo $arrayUsuario['posicao_futebol'];
                                            }
                                        ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }

include  ('./rodape_assinatura.php');
?>