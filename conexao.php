<?php

$server = "localhost";
$user   = "root";
$pass   = "";
$bd     = "bdsistema";

try {
    $con = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);
    //$con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conectado ao banco de dados com sucesso";
    //var_dump($con); //debugar - Descobrir o que está sendo respondido
} catch (PDOException $e) {
    echo "Erro ao connectar o Banco de dados:" .$e ->getMessage ();
}
