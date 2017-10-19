<?php
    require 'conexao.php';
    $msg = false;
    if(isset($_FILES['arquivo'])){
        $extensao =strtolower(substr($_FILES['arquivo']['name'], -4));
        $nome_novo = md5(time()) . $extensao;
        $diretorio = "upload/";
        
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nome_novo);
        $consulta = " INSERT INTO imagem (id_imagem,arquivo,data) VALUES (null,'$novo_nome',NOW())";
        if($mysqli->query($consulta)){
            $msg = "Imagem enviada com sucesso!";
        }
        else{
            $msg = "Falha ao enviar a imagem.";
        }
    }

    
    if($msg != false){
        echo "<p>$msg</p>";
    }
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" required name="arquivo">
    <input type="submit" value="Enviar">
</form>