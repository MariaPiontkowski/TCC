<?php
if(!isset($_SESSION['autorizado']) ||  $_SESSION['autorizado'] == NULL){
    header('Location: index.php?logado=2');
}