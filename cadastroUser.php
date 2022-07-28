<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro | User</title>
    <style>
        input {
            float: right;
        }

        .formContent {
            width: 280px;
        }

        select {
            float: right;
            width: 185px;
        }
    </style>
</head>

<body>
    <h1>Cadastro Usuário</h1>

    <div class="formContent">
        <form id="cadastroUser" method="POST" action="cadastroUser.php">
            <p><b>Nome:</b>
                <input type="text" name="nome">
            </p>

            <p><b>Email:</b>
                <input type="text" name="email">
            </p>
            <p><b>Senha:</b>
                <input type="password" name="password">
            </p>
            <p><b>&nbsp;</b>
                <input type="button" value="Enviar" onclick="document.getElementById('form1').submit();">
            </p>
        </form>
        <div>

</body>

</html>