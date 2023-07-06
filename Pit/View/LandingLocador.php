<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.png">
    <link rel="stylesheet" href="estilo.css">
    <title>Trin Trin - Landing Locador</title>
</head>
<body id="fundoReserva">
    <footer id="topoSite">
        <div id="tituloSite"><img src="imagens/iconTrin.png" alt="" id="iconTrin"></div>
        <div id="areaPesquisa"><input type="text" id="Pesquisa" placeholder="Pesquise aqui..."></div>
        <div id="areaIcons">
            <div class="icons areaIconLog"><a href="PerfilLoc.php"><img src="imagens/iconLogin.png" alt="" id="iconLogin"></a></div>
            <div class="icons areaIconCar"><a href="Reserva.php"><img src="imagens/iconCarrinho.png" alt="" id="iconCar"></a></div>
            <div id="area-botao-cor">
                <img src="imagens/modoCor.png" alt="" id="botao-cor" onclick="trocaCor()">
                <img src="imagens/modoEscuro.png" alt="" id="botao-cor1" onclick="voltarCor()">
            </div>
        </div>
    </footer>

    <header id="areaConteudoLand">
        <div id="areaImgLoc"><img src="imagens/BikeLocador.png" alt="" id="imgLandingL"></div>
        <div id="areaReservaCont" class="areaContLoc">
            <h1 id="tituloConteudo">Bikes</h1>
            <div id="textoConteudo">
            Cadastre sua bicicleta, e exponha o melhor <br> do seu produto para o mercado juntamente <br> com a TRINTRIN!
            </div>
            <a id="btnLanding" href="CadastroBike.php">Cadastrar</a>
        </div>
    </header>
</body>
<script src="JS/script.js"></script>
</html>