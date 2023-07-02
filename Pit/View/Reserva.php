<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Trin Trin - Reserva</title>
</head>
<body id="fundoReserva">
    <footer id="topoSite">
        <div id="tituloSite"><img src="imagens/iconTrin.png" alt="" id="iconTrin"></div>
        <div id="areaPesquisa"><input type="text" id="Pesquisa" placeholder="Pesquise aqui..."></div>
        <div id="areaIcons">
            <div class="icons areaIconLog"><a href="PerfilUser.php"><img src="imagens/iconLogin.png" alt="" id="iconLogin"></a></div>
            <div class="icons areaIconCar"><a href="Reserva.php"><img src="imagens/iconCarrinho.png" alt="" id="iconCar"></a></div>
            <div id="area-botao-cor">
                <img src="imagens/modoCor.png" alt="" id="botao-cor" onclick="trocaCor()">
                <img src="imagens/modoEscuro.png" alt="" id="botao-cor1" onclick="voltarCor()">
            </div>
        </div>
    </footer>

    <header id="areaConteudo">
        <div id="areaImgRes"><img src="imagens/imgReserva.png" alt="" id="imgReserva"></div>
        <div id="areaReservaCont">
            <h1 id="tituloConteudo">Bikes de <br> Montanha</h1>
            <div id="textoConteudo">
            Reserve sua bicicleta para aproveitar o melhor da vida.<br>
            Aproveite para lazer, trabalho... O que desejar <br> justamente com a TRINTRIN !!!
            </div>
            <a id="btnReserva" href="">Reservar</a>
        </div>
    </header>
</body>
<script src="JS/script.js"></script>
</html>