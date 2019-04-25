<?php
require 'conexao.php';
$count = $dbn->exec('DELETE FROM usuario');
    if ($count){
        header("Location: todosexcluidos.html");
        }
        else {
            header("Location: erro.html");
        }
?>