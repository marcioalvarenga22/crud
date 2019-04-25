<?php
require 'conexao.php';
?>
<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="utf-8" />
    <title>Sistema de Resgistro</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./DataTables/datatables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="./DataTables/datatables.js"></script>
<script>
$(document).ready(function() {
    $('#cadastros').DataTable();
});
</script>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row justify-content-md-left">
            <div class="col col-lg-6">
                <h3>
                    Usuários Cadastrados<br>
                    <small class="text-muted">Exibindo todos os usuários cadastrados</small>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="cadastros" class="row-border compact stripe hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Salario</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <?php
                   
                        $sql = "SELECT * FROM usuario";
                        foreach($dbn->query($sql) as $row){
                 ?>
                    <tr>
                        <td><?php  echo $row['id']; ?></td>
                        <td><?php  echo $row['nome']; ?></td>
                        <td><?php  echo $row['datana']; ?></td>
                        <td><?php  echo $row['salario']; ?></td>
                        <td><a  title="Editar"href="editar.php?id=<?php  echo $row['id']; ?>"><button type="button" class="btn btn-outline-success">Editar</button>
                            </a></td>
                        <td><a title="Apagar" href="deleta.php?id=<?php  echo $row['id']; ?>"><button type="button" class="btn btn-outline-danger">Excluir</button>
                            </a></td>
                    </tr>
                    <?php
                    }
                ?>
                </table>
                <a href="cadastro.html"><button type="button" class="btn btn-outline-success">Cadastrar novo usuário</button></a>
                <a href="deleteall.php"><button type="button" class="btn btn-outline-danger">Apagar todos os usuários</button></a>
            </div>
        </div>
    </div>
    
</body>
</html>