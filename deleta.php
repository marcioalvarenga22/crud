<?php
require 'conexao.php';
$id = $_GET['id'];
$count = $dbn->exec("DELETE FROM usuario WHERE id=$id");
if ($count){
    header("Location: usuariodeletado.html");
    }
    else {
        header("Location: erro.html");
    }
?>