<?php
include('./cabecalho_cadastro.php');
?>

<html>
<head>
    <meta charset="utf-8">
    <title>SportsTeams</title>

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style>

    </style>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

    <script type="application/javascript">

        $(function(){

            $("#basquete").change(function(){showHide('basquete')});
            $("#futebol").change(function(){showHide('futebol')});
            $("#volei").change(function(){showHide('volei')});


        });

        function showHide(esporte) {

             if($("#"+esporte+":checked").length > 0){
                $('#select-'+esporte).toggleClass('hidden', false);
            }else{
                $('#select-'+esporte).toggleClass('hidden', true);
            }

        }



    </script>
</head>
<body class="body-dark">
<div class="container">

    <div class="row">

        <form class="form-horizontal" method="POST" action="registre.php">
            <fieldset>
                <div class="form-registre">
                    <div class="panel-body">
                        <div class="container">

                                <div class="form-group">
                                    <div class="text-center">
                                        <img id="logo" alt="Logo Cadastro" src="./img/logo_grande_light.png"/>
                                    </div>
                                </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">
                                <h3>Informações da Conta</h3>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Nome:</label>
                            <div class="col-md-8">
                                <input id="Nome" name="Nome" placeholder="Insira seu nome completo"
                                       class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email">Email:</label>
                            <div class="col-md-3">
                                <input id="email" name="email" placeholder="Insira seu email" class="form-control input-md"
                                       required="" type="text">
                            </div>
                            <label class="col-md-2 control-label" for="email_confirm">Confirmar Email:</label>
                            <div class="col-md-3">
                                <input id="email_confirm" name="email_confirm" placeholder="Confirme seu email"
                                       class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="senha">Senha:</label>
                            <div class="col-md-3">
                                <input id="senha" name="senha" placeholder="Insira sua senha" class="form-control input-md"
                                       required="" type="password">
                            </div>
                            <label class="col-md-2 control-label" for="senha_confirm">Confirme sua Senha:</label>
                            <div class="col-md-3">
                                <input id="senha_confirm" name="senha_confirm" placeholder="Confirme sua senha"
                                       class="form-control input-md" required="" type="password">
                            </div>
                        </div>


                        <div class="form-group form-group-top">
                            <div class="col-md-4 control-label">
                                <h3>Informações do Usuario</h3>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="peso">Peso:</label>
                            <div class="col-md-1">
                                <input id="peso" name="peso" placeholder="kg" class="form-control input-md" required=""
                                       type="text">
                            </div>

                            <label class="col-md-1 control-label" for="altura">Altura:</label>
                            <div class="col-md-1">
                                <input id="altura" name="altura" placeholder="m" class="form-control input-md" required=""
                                       type="text">
                            </div>


                        </div>

                        <div class="form-group">

                            <label class="col-md-2 control-label" for="Nome">Nascimento</label>
                            <div class="col-md-1">
                                <input class="form-control input-md" type="text" name="dia" size="2" maxlength="2"
                                       placeholder="dd">
                            </div>
                            <div class="col-md-1">
                                <input class="form-control input-md" type="text" name="mes" size="2" maxlength="2"
                                       placeholder="mm">
                            </div>
                            <div class="col-md-1">
                                <input class="form-control input-md" type="text" name="ano" size="4" maxlength="4"
                                       placeholder="aaaa">
                            </div>


                            <label class="col-md-1 control-label" for="radios">Sexo</label>
                            <div class="col-md-4">
                                <label required="" class="radio-inline" for="radios-0">
                                    <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                    Feminino
                                </label>
                                <label class="radio-inline" for="radios-1">
                                    <input name="sexo" id="sexo" value="masculino" type="radio">
                                    Masculino
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cidade">Endereço</label>
                            <div class="col-md-2">

                                    <input id="cidade" name="cidade" class="form-control input-md"" placeholder="Estado" required=""
                                           type="text">

                            </div>

                            <div class="col-md-4">

                                    <input id="estado" name="estado" class="form-control input-md" placeholder="Cidade" required=""
                                           type="text">


                            </div>
                        </div>


                        <div class="form-group form-group-top">
                            <div class="col-md-3 control-label">
                                <h3>Esportes</h3>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Escolha os Esportes:</label>

                            <div class="col-md-4">
                                <label required="" class="radio-inline">
                                    <input name="esporte" id="basquete" value="1" type="checkbox">
                                    Basquete
                                </label>
                                <label required="" class="radio-inline">
                                    <input name="esporte" id="futebol" value="2" type="checkbox">
                                    Futebol
                                </label>
                                <label class="radio-inline">
                                    <input name="esporte" id="volei" value="3" type="checkbox">
                                    Vôlei
                                </label>
                            </div>
                        </div>

                        <div class="form-group hidden" id="select-basquete">
                            <label class="col-md-2 control-label" for="prependedtext">Basquete</label>
                            <div class="col-md-4">
                                <select id="posicaoBasquete" name="posicaoBasquete" class="form-control">
                                    <option value="0">-- Selecione sua Posicao --</option>
                                    <option value="1">Armador</option>
                                    <option value="2">Ala-Armador</option>
                                    <option value="3">Ala</option>
                                    <option value="4">Ala-pivo</option>
                                    <option value="5">Pivo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group hidden"  id="select-futebol">
                            <label class="col-md-2 control-label" for="prependedtext">Futebol</label>
                            <div class="col-md-4">
                                <select id="posicaoFutebol" name="posicaoFutebol" class="form-control">
                                    <option value="0">-- Selecione sua Posicao --</option>
                                    <option value="1">Goleiro</option>
                                    <option value="2">Zagueiro</option>
                                    <option value="3">Lateral</option>
                                    <option value="4">Meio Campo</option>
                                    <option value="5">Atacante</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group hidden"  id="select-volei">
                            <label class="col-md-2 control-label" for="prependedtext">Voleibol</label>
                            <div class="col-md-4">
                                <select id="posicaoVolei" name="posicaoVolei" class="form-control">
                                    <option value="0">-- Selecione sua Posicao --</option>
                                    <option value="1">Levantador</option>
                                    <option value="2">Central</option>
                                    <option value="3">Oposto</option>
                                    <option value="4">Ponteiro</option>
                                    <option value="5">Libero</option>
                                </select>
                            </div>
                        </div>

                        <hr class="form-group-top"/>

                        <div class="form-group form-group-top">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar
                                </button>
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                            </div>
                        </div>

                    </div>
                </div>

            </fieldset>
        </form>


    </div>


</div>
</body>
</html>
