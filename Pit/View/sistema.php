<?php
session_start();
      //print_r($_SESSION);
      if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
      {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: Login.php');
      }
      else
      {
        $logado = $_SESSION['email'];
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
</head>
<body>
    <h1>Acesso Liberado</h1>

<?php
echo "<h1>Olá <u>$logado </u></h1>";
?>
<br>
</body>
</html>