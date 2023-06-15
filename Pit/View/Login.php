<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="passu.css">
    <title>Login</title>
</head>
<body id="fundoSite">
    <form action="verification.php" method="POST"  class="divFundo fundo1">
        <h2 class="tituloLogin">Login</h2>
        <div id="areaLogSen">
            <label for="nome" class="tituloLog">Email</label>
            <input type="email" id="nome areaEmail" name="email" class="inputEntrada" placeholder="username@gmail.com">
            <label for="senha" class="tituloLog">Password</label>
            <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" width="20px" id="olho" class="olho">
            <input type="password" id="pass" name="pass"class="inputEntrada" placeholder="Password">
            <a href="" class="EsqueceSenha">Esqueceu a Senha?</a>
        </div>
        <div class="areaBtnLog"><input type="submit" name="submit" id="submit" class="botaoLogar"></div>
        <div class="areaLinksCadastra"><a href="Cadastro.php" class="linkCadastra">Não tem conta? Cadastre-se</a></div>
        <div class="areaLinksCadastra"><a href="LoginL.php" class="linkCadastra lC2">Login como LOCADOR</a></div>
    </form>
    <div class="divFundo fundo2">
        <div class="areaImgFundo"><img src="imagens/imgLogin.png" alt="" class="imgFundo"></div>
    </div>
<script src="JS/passu.js"></script>
</body>
</html>