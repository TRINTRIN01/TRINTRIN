<?php

include_once('config.php');

if(isset($_POST['AtuPerfil']))
{
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['pass'];
    $endereco = $_POST['endereco'];
    $tel = $_POST['tel'];

    $sqlupdate = "UPDATE usuario SET email = $email, nome = $nome , pass = $senha, endereco = $endereco tel = $tel WHERE email = $email ";
    $sql_query = $conexao->query($sqlupdate);
}
else{
    header('location : reserva.php');
}
?>

