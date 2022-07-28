<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro | Notícias</title>
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
    <h1>Cadastro Notícias</h1>

    <div class="formContent">
        <form id="form1" method="POST" action="form1.php">
            <p><b>Título:</b>
                <input type="text" name="title">
            </p>

            <p><b>Conteúdo:</b>
                <input type="text" name="noticia">
            </p>

            <p><b>Imagem: </b><input type="file">
            </p>

            &nbsp;
            <input type="button" value="Enviar" onclick="document.getElementById('form1').submit();">
            </p>
        </form>
        <div>

</body>

</html>