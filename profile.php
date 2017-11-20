<?php
    include  ('./cabecalho_nav.php');

        $email = $_SESSION['email'];
        $senha = sha1($_SESSION['senha']);

        require 'conexao.php';

        $sql = "SELECT 
                    u.id,
                    u.nome,
                    u.email,
                    u.senha,
                    u.imagem,
                    ui.peso,
                    ui.altura,
                    ui.sexo,
                    ui.data_nasc,
                    ui.estado,
                    ui.cidade,
                    ue.posicao_volei,
                    ue.posicao_futebol,
                    ue.posicao_basquete
                FROM
                    usuario u
                INNER JOIN usuario_info ui ON ui.id_usuario = u.id
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
              <h3 class="panel-title">Informações da Conta</h3>
            </div>

            <div class="panel-body">
                <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="Imagem de Usuario" src="<?php echo 'img/uploads/'.$arrayUsuario['imagem'];?>" height="300" width="300" class="img-circle img-responsive">
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
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title">Informações Pessoais:</h3>
            </div>
            <div class="panel-body">
              <div class="row">
            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Idade:</td>
                        <td><?php echo
                                (date('Y')) - (substr($arrayUsuario['data_nasc'], -10, 4));
                             ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Altura:</td>
                        <td><?php echo $arrayUsuario['altura'] ?>m</td>
                      </tr>
                      <tr>
                        <td>Peso:</td>
                        <td><?php echo $arrayUsuario['peso'] ?>kg</td>
                      </tr>
                   
                      <tr>
                        <td>Genero:</td>
                        <td><?php if($arrayUsuario['sexo'] == 'm'){?> Masculino <?php
                                }else{
                            ?> Feminino <?php
                            }
                            ?></td>
                      </tr>
                     
                    </tbody>
                  </table>

                  </div>
              </div>
            </div>
             <div class="panel-heading">
              <h3 class="panel-title">Esportes</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Basquete:</td>
                        <td><?php if($arrayUsuario['posicao_basquete'] == 'NULL'){
                                echo "-";
                            } else {
                               echo $arrayUsuario['posicao_basquete'];
                            }

                            ?></td>
                      </tr>
                      <tr>
                        <td>Futebol:</td>
                        <td><?php if($arrayUsuario['posicao_futebol'] == 'NULL'){
                                echo "-";
                            } else {
                               echo $arrayUsuario['posicao_futebol'];
                            } ?></td>
                      </tr>
                      <tr>
                        <td>Voleibol:</td>
                        <td><?php if($arrayUsuario['posicao_volei'] == 'NULL'){
                                echo "-";
                            } else {
                                echo $arrayUsuario['posicao_volei'];
                            } ?></td>
                      </tr>
                     
                    </tbody>
                  </table>

                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php }

    include  ('./rodape_assinatura.php');
?>