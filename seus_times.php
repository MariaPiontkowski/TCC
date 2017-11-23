<?php
    include('./cabecalho_nav.php');
    require 'conexao.php';

    $sql = "SELECT t.id, t.nome_time, t.cidade_time, t.estado_time, t.time_esporte, t.imagem_time, tu.fk_usuario, fk_time FROM time INNER JOIN time_usuarios ON ;";

    $sql = "SELECT * FROM time_usuarios 
              where fk_usuario = '$usuarioId'; ";

  //  $arrayTimes = mysqli_fetch_assoc($conexao, $sql);

?>
    <body>
        <div class="container">
            <div class="row">
                <div  class="col-md-10 jogador">
                    <div style="float:left;">
                        <img src="./img/uploads/times/6280f06275b3a759717721c85b4e6a99.png" alt="Emblema do Time" height="110" width="110" class="img-circle img-responsive">
                    </div>
                    <div class="div_info_margin">
                        <h3></h3>
                        <p>Cidade: </p>
                        <p>Estado:</p>
                    </div>
                </div>


            </div>
        </div>
    </body>
<?php
    include('./rodape_assinatura.php');
?>
