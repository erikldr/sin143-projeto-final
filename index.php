<?php
include('connect.inc.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        //prevencao contra mysqlinjection
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['usuario_id'] = $usuario['usuario_id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <div class="form_cd">
        <h2> Entre com login e senha </h2>
        <form method="POST">
            <div><input type="text" name="email" placeholder="E-mail"></div>
            <div><input type="password" name="senha" placeholder="Senha"></div>
            <div><input type="submit" name="acao" value="Entrar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>
        </form>
        <form action="cadastroUser.php">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>


