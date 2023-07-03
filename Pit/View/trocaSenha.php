<?php
    session_start();
    
    include_once('config.php');
    if(isset($_POST['submit'])) {
        
        $email  = $conexao->escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo  "<script>alert('Email inválido!');</script>";
        }

        $senhaAnt = $_POST['passAnt'];
        $senhaNova = $_POST['passNew'];
        $senhaBd = ("SELECT senha FROM usuario WHERE email = $email and senha = $senhaAnt");

        if($senhaBd == $senhaAnt) {
            $sql = "UPDATE usuario SET senha = $senhaNova WHERE email = $email";
            $sql_query = $conexao->query($sql);
            
            $sql_code = "UPDATE usuario SET senha = '$senhaNova' WHERE email = '$email'";
            $sql_query = $conexao->query($sql_code);
            echo  "<script>alert('Senha atualizada com sucesso!'); location.href='Reserva.php';</script>";
        }
        else {
            echo  "<script>alert('Senha incompativel!');</script>";
        }
        
    }
    
?>

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
<body id="fundoRecuSenha">
    <nav id="topoSiteIndex">
        <div id="tituloSite"><img src="imagens/iconTrin.png" alt="" id="iconTrin"></div>
        <div id="areaIcons">
            <div id="area-botao-cor">
                <img src="imagens/modoCor.png" alt="" id="botao-cor" onclick="trocaCor()">
                <img src="imagens/modoEscuro.png" alt="" id="botao-cor1" onclick="voltarCor()">
            </div>
        </div>
    </nav>

    <form action="trocaSenha.php" method="POST"  class="divFundo formRecuSenha">
        <h2 class="tituloLogin TlSenha">TROCAR SENHA</h2>
        <div id="areaLogSen">
            <label for=""class="tituloLog">Email</label>
            <input type="email" id="email" name="email" class="inputEntrada"  placeholder="username@gmail.com" oninput="emailMask(email)"  required>
            <label for=""class="tituloLog">Senha Antiga</label>
            <input type="password" id="passAnt" name="passAnt"class="inputEntrada" placeholder="Password">
            <label for=""class="tituloLog">Nova Senha</label>
            <input type="password" id="passNew" name="passNew"class="inputEntrada" placeholder="Password">
        </div>
        
        <input type="submit" name="submit" value="CONFIRMAR" id="submit" class="botaorecuSenha">
    </form>

    <footer id="rodape">
        <div id="areaLinksPag">
            <a href="" class="linkPaginaSite">contato</a>
            <a href="Cadastro.php" class="linkPaginaSite">cadastro</a>
            <a href="Login.php" class="linkPaginaSite">login</a>
            <a href="Reserva.php" class="linkPaginaSite">reserva</a>
        </div>

        <div id="areaLogoSite"><img src="imagens/iconTrin.png" alt="" id="iconTrinRodape"></div>
    </footer>
</body>
<script src="JS/scriptPerfil.js"></script>
</html>