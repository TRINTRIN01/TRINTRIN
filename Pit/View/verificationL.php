<?php
session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass']) )
{
  //entra na pagina
  include_once('config.php');
  $email = $_POST['email'];
  $senha = $_POST['pass'];

  //print_r('Email : ' .$email);
  //print_r('<br>');
  //print_r('Senha : ' .$senha);

  $sql = "SELECT * FROM locador WHERE email = '$email' and senha = '$senha' ";

  $result = $conexao->query($sql);

  //print_r($result);
  // print_r($sql);

  if(mysqli_num_rows($result) < 1)
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: LoginL.php');
  }
  else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location: CadastroBike.php');
  }
}
else
{
  header('location: LoginL.php');
}
?>