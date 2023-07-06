<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.png">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="passu.css">
    <title>Perfil do usúario</title>
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

    <form action="deleteL.php" method="POST"  class="divFundo formPerfilUser">
        <h2 class="tituloLogin TlSenha">MEU PERFIL</h2>
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
        
        <input type="submit" name="AtuPerfil" value="ATUALIZAR PERFIL" id="AtuPerfil" class="botaoAtualizar">
        <input type="submit" name="ExcConta" value="EXCLUIR CONTA" id="ExcConta" class="botaoExcluir">
    </form>

    <footer id="rodapePerfil">
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