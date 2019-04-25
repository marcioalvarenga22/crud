<?php
$dsn = 'mysql:dbname=tecweb2;host=127.0.0.1';
$user = 'root';
$password = '';
try {
    $dbn = new PDO($dsn,$user,$password);
}
catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}
?>