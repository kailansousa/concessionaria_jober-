<?php

$servername="localhost";
$username="root";
$password="";
$database="cadastro_conss";

//Criando conexão
$conexao = new mysqli($servername, $username, $password, $database);

//Checando conexão 
if($conexao->connect_error){
    die("Houve um erro:".$conexao->connect_error);
}

?>
