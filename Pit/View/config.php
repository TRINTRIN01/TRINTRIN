<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'trintrin';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//f($conexao->connect_errno){
 //   echo "ERRO";
//}
//else{
 //   ECHO "Deu certo";
//}

?>