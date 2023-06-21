<?php
    include_once('config.php');
     
    if(isset($_POST['ok']))
    {
        $email  = $mysqli = $mysqli->escape_string($_POST['email']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro[] = "E-mail inválido.";
            }

            $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";

            $result = $conexao->query($sql);

            if($result == 0) {
                $erro[] = "O e-mail informado não foi registrado anteriormente!";
            }

            if(count($erro) == 0 && $result > 0) {
                $novaSenha = substr(time(md5(time())), 0, 6);
                $nscriptografada = md5(md5($novaSenha));
            }

            if(1 == 1/*mail($email, "Sua nova senha", "Sua nova senha é ".$novaSenha)*/) {
                $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
                $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

                if($sql_query) {
                    $erro[] = "Senha Alterada com Sucesso!";
                }
            }

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

    <form action="" method="POST"  class="divFundo formRecuSenha">
        <h2 class="tituloLogin TlSenha">RECUPERAÇÃO DE SENHA</h2>
        <div id="areaLogSen">
            <label for="nome" class="tituloLog">Email</label>
            <input type="email" id="nome areaEmail" name="email" class="inputEntrada" placeholder="username@gmail.com">
        </div>
        <input type="submit" name="ok" value="OK" id="submit" class="botaorecuSenha">
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
<script src="JS/scriptCadBike.js"></script>
</html>