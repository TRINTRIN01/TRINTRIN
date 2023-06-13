botaoCor = document.getElementById("botao-cor");
botaoCor1 = document.getElementById("botao-cor1");
FundoReserva = document.getElementById("fundoReserva");
barraPesquisa = document.getElementById("Pesquisa");
textoReserva = document.getElementById("textoConteudo");

function trocaCor() {
    botaoCor.style.display = "none";
    botaoCor1.style.display = "grid";
    textoReserva.style.color = "#ffffff";
    fundoReserva.style.backgroundColor = "#000000";
    barraPesquisa.style.backgroundColor = "#ffffff";
    barraPesquisa.style.placeholder.color = "#000000"; 
}

function voltarCor() {
    botaoCor.style.display = "grid";
    botaoCor1.style.display = "none";
    textoReserva.style.color = "#000000";
    fundoReserva.style.backgroundColor = "#ffffff";
    barraPesquisa.style.backgroundColor = "#990D35";
}