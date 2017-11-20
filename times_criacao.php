<?php
    include('./cabecalho_nav.php');
?>
    <div class="container">
        <form class="form-horizontal" method="POST" action="registreTime.php" enctype="multipart/form-data">
            <fieldset>
                    <div class="toppad">
                        <div class="panel panel-info col-md-12">

                            <div class="form-group ">
                                <div class="text-center">
                                    <img alt="Criacao de Time" src="./img/logo_grande.png">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <label class="control-label" for="nomeTime">Nome do seu Time:</label>
                                    <input type="text" class="form-control" name="nomeTime">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-5 col-md-offset-1">
                                    <label class="control-label" for="nomeEstado">Digite seu Estado:</label>
                                    <input type="text" class="form-control" name="nomeEstado">
                                </div>

                                <div class="col-md-5">
                                    <label class="control-label" for="nomeCidade">Digite sua Cidade:</label>
                                    <input type="text" class="form-control" name="nomeCidade">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1 desgraca">
                                    <label class=" control-label" for="esporteTime">Qual esporte praticado?</label>
                                    <select id="posicaoBasquete" name="esporteTime" class="form-control">
                                        <option value="Basquete">Basquete</option>
                                        <option value="Futebol">Futebol</option>
                                        <option value="Volei">Voleibol</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <label for="pic"

                                           class="">Selecione o emblema ou foto do Time:</label>
                                    <input type="file" name="pic" class="form-control input-md" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group form-group-top">
                                <div class="col-md-12 col-md-offset-4">
                                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit" style="margin-right:100px;">Cadastrar</button>
                                    <a href="index.php"><button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button></a>
                                    <br/>
                                </div>
                            </div>

                        </div>
                    </div>
            </fieldset>
        </form>
    </div>
<?php
    include('./rodape_assinatura.php');
?>
