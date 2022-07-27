<?php 
    include('connect.inc.php');

    //Variáveis de controle
    $registros_por_pagina = 5;

    if ($_GET['page'] == '') {
        $page = 0;
    } else {
        $page = $_GET['page']*$registros_por_pagina;
    }

    $sql = "SELECT * FROM newbooks ORDER BY nome LIMIT $page, $registros_por_pagina";

    //echo ($sql);

    $result = $conn->query($sql);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>SIN 143</title>
        <link rel="stylesheet" href="formdb.css">
    </head>
    <body>

<?php 
if ($result->num_rows > 0) {

    echo "<hr><table><tr><td>ID</td><td>Nome</td><td>Ano</td></tr>";

    // Dados de cada registro
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $nome = $row['nome'];
        $ano = $row['ano'];
        
        echo "<tr><td>$id</td><td>$nome</td><td>$ano</td>";
    }

    echo "</table>";

    //Quantos elementos eu tenho e divir pelo número de elementos por página.
    $sql = "SELECT * FROM newbooks";
    $result_elements = $conn->query($sql);
    $total_de_registros = $result_elements->num_rows;
    $total_de_paginas = ceil($total_de_registros/$registros_por_pagina);

    $count = 1;
    for ($i=0; $i<$total_de_paginas; $i++) {
        echo "<a href='paginacao.php?page=$i'>$count</a>&nbsp;&nbsp;";
        $count++;
    }

}
?>
