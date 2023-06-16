<?php
     
     if(isset($_POST['submit']))
     {

    include_once('config.php');

      $nomeBicicleta = $_POST['nomeBicicleta'];
      $nomeLocador = $_POST['nomeLocador'];
      $valor = $_POST['valor'];
      $tel = $_POST['telefone'];

      $result = mysqli_query($conexao, "INSERT INTO Bicicleta(nomeBicicleta,nomeLocador,valor,telefone)
       VALUES('$nomeBicicleta','$nome','$senha','$endereco','$tel')");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro Bicicleta - TRINTRIN</title>
</head>
<body id="fundoCadBike">
    <nav id="topoSite">
        <div id="tituloSite"><img src="imagens/iconTrin.png" alt="" id="iconTrin"></div>
        <div id="areaPesquisa"><input type="text" id="Pesquisa" placeholder="Pesquise aqui..."></div>
        <div id="areaIcons">
            <div class="icons areaIconLog"><a href="Login.php"><img src="imagens/iconLogin.png" alt="" id="iconLogin"></a></div>
            <div class="icons areaIconCar"><a href="Reserva.php"><img src="imagens/iconCarrinho.png" alt="" id="iconCar"></a></div>
            <div id="area-botao-cor">
                <img src="imagens/modoCor.png" alt="" id="botao-cor" onclick="trocaCor()">
                <img src="imagens/modoEscuro.png" alt="" id="botao-cor1" onclick="voltarCor()">
            </div>
        </div>
    </nav>

    <header id="areaConteudoCadBike">
        <form enctype="multipart/form-data" action="" method="POST" id="formCadastroBike">
            <div id="areaImagemProduto">
                <label class="picture" for="picture__input" tabIndex="0">
                    <span class="picture__image"></span>
                </label>

                <input type="file" name="picture__input" id="picture__input">
            </div>
            
            <div id="areaPreencherCadBike">
                <input type="text" id="nomeBike" name="nomeBike" class="inputEntrada" placeholder="nome bicicleta" required>
                <input type="text" id="local" name="local" class="inputEntrada" placeholder="local" required>
                <input type="text" id="nomeLocador" name="nomeLocador" class="inputEntrada" placeholder="nome do locador" required>
                <input type="text" id="valorAluguel" name="valorAluguel" class="inputEntrada" placeholder="Valor do aluguel" required>
                <input type="text" id="tel" name="tel" class="inputEntrada" placeholder="Telefone p/ contato" oninput="mascara_telefone()" required>
                <div id="areaBtnCadBike"><button type="submit" name="submit" id="btnCadBike">Cadastrar</button></div>
            </div>
        </form>
        
    </header>

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