<?php
require 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$datana = $_POST['datana'];
$salario = $_POST['salario'];
$count = $dbn->exec("UPDATE usuario
SET nome='$nome',datana='$datana',salario='$salario'
WHERE id=$id");
if ($count){
    header("Location: sucess.html");
    }
    else {
        header("Location: erro.html");
    }
    ?>