<?php
    include('connect.inc.php');
    include('painel.php');
    $query = "SELECT * FROM usuarios";
    $res = $mysqli->query($query);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table>";
        print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Senha</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->usuario_id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->senha."</td>";
            print "<td>
                        <button onclick=\"
                            location.href='?page=editar&usuario_id=".$row->{'usuario_id'}."';\" class='btn'>Editar</button>
                        <button class='btn'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }

    $row = $res->fetch_object();
    $sql = "SELECT * FROM usuarios WHERE usuario_id=$row->{'usuario_id'}";
    $res = $mysqli->query($sql);
        

?>
<form method="POST">
    <div><input type="text" name="nome" placeholder="Nome"></div>
    <div><input type="text" name="email" placeholder="E-mail"></div>
    <div><input type="password" name="senha" placeholder="Senha"></div>
    <div><input type="submit" name="acao" value="Cadastrar"></div>
    <div><input type="hidden" name="form" value="f_form"></div>
</form>

