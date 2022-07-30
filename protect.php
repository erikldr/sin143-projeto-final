<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Usuario nao logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>