<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastro de usuario</title> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <div class="form_cd">
        <?php
            include('connect.inc.php');

            if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])) {
            
                if(strlen($_POST['email']) == 0) {
                    echo "Preencha seu e-mail";
                } else if(strlen($_POST['senha']) == 0) {
                    echo "Preencha sua senha";
                } else if(strlen($_POST['nome']) == 0) {
                    echo "Preencha seu nome";
                } else {
                    $nome = $mysqli->real_escape_string($_POST['nome']);
                    $email = $mysqli->real_escape_string($_POST['email']);
                    $senha = $mysqli->real_escape_string($_POST['senha']);

                    $sql_code = "INSERT INTO usuarios(usuario_id, nome, email, senha, pontos) VALUES ('NULL', '$nome', '$email', '$senha', 'NULL')";
                    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
                    echo"resultado da conexao: ".$sql_query.".";
                }
            }
            //header("Location: cadastroUser.php");
        ?>
        <h2>Cadastro de usuario</h2>
        <form method="POST">
            <div><input type="text" name="nome" placeholder="Nome"></div>
            <div><input type="text" name="email" placeholder="E-mail"></div>
            <div><input type="password" name="senha" placeholder="Senha"></div>
            <div><input type="submit" name="acao" value="Cadastrar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>
        </form>
    </div>
</body>
</html>