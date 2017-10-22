<?php
include('./cabecalho_cadastro.php');
?>

<html>
<head>
    <meta charset="utf-8">
    <title>SportsTeams</title>

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

    <script type="application/javascript">

        $(function () {

            $("#basquete").change(function () {
                showHide('basquete')
            });
            $("#futebol").change(function () {
                showHide('futebol')
            });
            $("#volei").change(function () {
                showHide('volei')
            });

            $('form').submit(function (e) {

                var email = $('#email');
                var confirma_email = $('#email_confirm');

                var senha = $('#senha');
                var confirma_senha = $('#senha_confirm');

                if (email.val() != confirma_email.val()) {

                    event.preventDefault(e);
                    confirma_email.focus();
                    alert('E-mail informado para confirmação não conicide');

                } else if (senha.val() != confirma_senha.val()) {

                    event.preventDefault(e);
                    confirma_senha.val('').focus();
                    alert('Senha informada para confirmação não conicide');

                }
            });

            $("#peso, #altura").keydown(function (event) {

                // Permite: backspace, delete, tab, escape, enter dot and comma
                if ($.inArray(event.keyCode, [46, 8, 9, 27, 13, 110, 188, 190]) !== -1 ||
                    // Permite: home, end, left, right, down, up
                    (event.keyCode >= 35 && event.keyCode <= 40)){

                    return;
                }
                // Permite apenas numeros
                if ((event.shiftKey || (event.keyCode < 48 || event.keyCode > 57)) && (event.keyCode < 96 || event.keyCode > 105)) {
                    event.preventDefault();
                }
            });

            $("#dia, #mes, #ano").keydown(function (event) {

                //Permite apenas numeros
                if ((event.shiftKey || (event.keyCode < 48 || event.keyCode > 57)) && (event.keyCode < 96 || event.keyCode > 105)) {
                    event.preventDefault();                }
            });


        });

        function showHide(esporte) {

            if ($("#" + esporte + ":checked").length > 0) {
                $('#select-' + esporte).toggleClass('hidden', false);
            } else {
                $('#select-' + esporte).toggleClass('hidden', true);
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
                                <input id="nome" name="nome" placeholder="Insira seu nome completo"
                                       class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email">Email:</label>
                            <div class="col-md-3">
                                <input id="email" name="email" placeholder="Insira seu email"
                                       class="form-control input-md"
                                       required="" type="text">
                            </div>
                            <label class="col-md-2 control-label" for="email_confirm">Confirmar Email:</label>
                            <div class="col-md-3">
                                <input id="email_confirm" name="email_confirm" placeholder="Confirme seu email"
                                       class="form-control input-md" required="" type="text" onpaste="return false;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="senha">Senha:</label>
                            <div class="col-md-3">
                                <input id="senha" name="senha" placeholder="Insira sua senha"
                                       class="form-control input-md"
                                       required="" type="password" onpaste="return false;">
                            </div>
                            <label class="col-md-2 control-label" for="senha_confirm">Confirme sua Senha:</label>
                            <div class="col-md-3">
                                <input id="senha_confirm" name="senha_confirm" placeholder="Confirme sua senha"
                                       class="form-control input-md" required="" type="password"
                                       onpaste="return false;">
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
                                <input id="altura" name="altura" placeholder="m" class="form-control input-md"
                                       required=""
                                       type="text">
                            </div>


                        </div>

                        <div class="form-group">

                            <label class="col-md-2 control-label" for="Nome">Nascimento</label>
                            <div class="col-md-1">
                                <input class="form-control input-md" type="text" name="dia" id="dia" size="2" maxlength="2"
                                       placeholder="dd">
                            </div>
                            <div class="col-md-1">
                                <input class="form-control input-md" type="text" name="mes" id="mes" size="2" maxlength="2"
                                       placeholder="mm">
                            </div>
                            <div class="col-md-1">
                                <input class="form-control input-md" type="text" name="ano" id="ano" size="4" maxlength="4"
                                       placeholder="aaaa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="radios">Sexo</label>
                            <div class="col-md-4">
                                <label class="radio-inline" for="sexo-f">
                                    <input name="sexo" id="sexo-f" value="f" type="radio" required>
                                    Feminino
                                </label>
                                &nbsp;
                                <label class="radio-inline" for="sexo-m">
                                    <input name="sexo" id="sexo-m" value="m" type="radio" required>
                                    Masculino
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cidade">Endereço</label>
                            <div class="col-md-2">

                                <input id="cidade" name="cidade" class="form-control input-md"" placeholder="Estado"
                                required=""
                                type="text">

                            </div>

                            <div class="col-md-4">

                                <input id="estado" name="estado" class="form-control input-md" placeholder="Cidade"
                                       required=""
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
                                <label class="radio-inline">
                                    <input name="esporte" id="basquete" value="1" type="checkbox">
                                    Basquete
                                </label>
                                <label class="radio-inline">
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
                            <label class="col-md-2 control-label" for="posicaoBasquete">Basquete</label>
                            <div class="col-md-4">
                                <select id="posicaoBasquete" name="basquete" class="form-control">
                                    <option value="NULL">-- Selecione sua Posição --</option>
                                    <option value="Armador">Armador</option>
                                    <option value="Ala-Armador">Ala-Armador</option>
                                    <option value="Ala">Ala</option>
                                    <option value="Ala-pivo">Ala-pivo</option>
                                    <option value="Pivô">Pivô</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group hidden" id="select-futebol">
                            <label class="col-md-2 control-label" for="posicaoFutebol">Futebol</label>
                            <div class="col-md-4">
                                <select id="posicaoFutebol" name="futebol" class="form-control">
                                    <option value="NULL">-- Selecione sua Posição --</option>
                                    <option value="Goleiro">Goleiro</option>
                                    <option value="Zagueiro">Zagueiro</option>
                                    <option value="Lateral">Lateral</option>
                                    <option value="Meio Campo">Meio Campo</option>
                                    <option value="Atacante">Atacante</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group hidden" id="select-volei">
                            <label class="col-md-2 control-label" for="posicaoVolei">Voleibol</label>
                            <div class="col-md-4">
                                <select id="posicaoVolei" name="volei" class="form-control">
                                    <option value="NULL">-- Selecione sua Posição --</option>
                                    <option value="Levantador">Levantador</option>
                                    <option value="Central">Central</option>
                                    <option value="Oposto">Oposto</option>
                                    <option value="Ponteiro">Ponteiro</option>
                                    <option value="Líbero">Líbero</option>
                                </select>
                            </div>
                        </div>

                        <hr class="form-group-top"/>

                        <div class="form-group form-group-top">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar
                                </button>
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar
                                </button>
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
