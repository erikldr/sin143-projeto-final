<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Painel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="painel.css" rel="stylesheet">
</head>
<body>

    <div class="topnav">
        <a class="active" href="painel.php">Painel</a>
        <a href="edicao_usuarios.php">Editar usuarios</a>
        <a href="#whitepage">whitepage</a>
        <a href="sobre.php">Sobre</a>
        <a href="logout.php">Sair</a>
    </div>

    <div style="padding-left:16px">
        <h2>Bem vindo ao painel, <?php echo $_SESSION['nome']; echo $_SESSION['usuario_id'];?></h2>
    </div>

</body>
</html>