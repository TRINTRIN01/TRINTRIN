<?php
     
     if(isset($_POST['submit']))
     {
        //print_r('Nome : ' .$_POST['nome']);
       // print_r('<br>');
        //print_r('Email : ' .$_POST['email']);
       // print_r('<br>');
       // print_r('Senha : ' .$_POST['pass']);
       // print_r('<br>');
      //  print_r('Endereço : ' .$_POST['endereco']);
      //  print_r('<br>');
      //  print_r('Telefone : ' .$_POST['tel']);

    include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['pass'];
      $endereco = $_POST['endereco'];
      $tel = $_POST['tel'];

      $result = mysqli_query($conexao, "INSERT INTO usuario(email,nome,senha,endereco,telefone)
       VALUES('$email','$nome','$senha','$endereco','$tel')");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro</title>
</head>
<body id="fundoSite">
    <form action="Cadastro.php" method="POST" class="divFundo fundo1">
        <h2 class="tituloLogin">Create Account</h2>
        <div id="areaLogSen">
            <label for="nome" class="tituloLog">Nome Completo</label>
            <input type="text" id="nome areaEmail" name="nome"class="inputEntrada" placeholder="nome completo" required>
            <label for="email" class="tituloLog">Email</label>
            <input type="email" id="email" name="email" class="inputEntrada" placeholder="username@gmail.com" oninput="emailMask(email)"  required>
            <label for="senha" class="tituloLog">Password</label>
            <input type="password" id="pass" name="pass" class="inputEntrada" placeholder="Password" required>
            <label for="endereco" class="tituloLog">Endereço</label>
            <input type="text" id="endereco areaSenha" name="endereco" class="inputEntrada" placeholder="Seu Endereço" required>
            <label for="telefone" name="tel" class="tituloLog">Telefone</label>
            <input type="text" id="tel" name="tel" class="inputEntrada" placeholder="(99) 99999-9999" oninput="mascara_telefone()" required>
        </div>
        <div class="areaBtnLog"><a href="Login.php" class="linkCad"><input type="submit" name="submit" id="submit"></a></div>
        <div class="areaLinksCadastra"><a href="CadastroL.php" class="linkCadastra lC2">Cadastro como LOCADOR</a></div>
    </form>
    <div class="divFundo fundo2">
        <div class="areaImgFundo2"><img src="imagens/imgCad.png" alt="" class="imgFundo2"></div>
    </div>
</body>
<script src="JS/index.js"></script>
</html>

