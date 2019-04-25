<?php
require 'conexao.php';
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sistema de Resgistro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-lg-6">
                <h3>
                    Editar Usuário<br>
                    <small class="text-muted">Edite as informações do usuário selecionado</small>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <form name="edita" action="atualiza.php" method="post">
                    <?php
                            $sql = "SELECT * FROM usuario WHERE id=".$_GET['id']."";
                                foreach($dbn->query($sql) as $row){
                    ?>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                        </div>
                        <input name="nome" type="text" class="form-control" placeholder="Digite um nome" aria-label="nome"
                            aria-describedby="basic-addon1" value="<?php echo $row['nome']; ?>">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Data de Nascimento</span>
                        </div>
                        <input name="datana"type="text" class="form-control" placeholder="Digite uma nova data"
                            aria-label="datana" aria-describedby="basic-addon1" value="<?php echo $row['datana']; ?>">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Salario</span>
                        </div>
                        <input name="salario" type="text" class="form-control" placeholder="Digite um novo salario" aria-label="salario"
                        aria-describedby="basic-addon1" value="<?php echo $row['salario']; ?>">
                    </div>
                    
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-outline-success">Editar</button>
                    <a href="consulta.php"><button type="button"
                            class="btn btn-outline-secondary">Voltar</button></a>
            </div>
            <?php
                                                                }
                    ?>
            </form>
        </div>
    </div>
</body>
</html>