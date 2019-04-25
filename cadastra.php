<?php
require 'conexao.php';
$nome = $_POST['nome'];
$datana = $_POST['datana'];
$salario = $_POST['salario'];
$count = $dbn->exec("insert into usuario (nome,datana,salario) values ('$nome','$datana','$salario')");
if ($count){
    header("Location: sucess.html");
    }
    else {
        header("Location: erro.html");
    }
?>