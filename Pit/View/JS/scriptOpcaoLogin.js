botaoCor = document.getElementById("botao-cor");
botaoCor1 = document.getElementById("botao-cor1");
FundoIndex = document.getElementById("fundoIndex");
linksPag = document.getElementsByClassName("linkPaginaSite");
tituloIndex = document.getElementById("tituloOpcao");
linkOpcao = document.getElementsByClassName("linkDirecLogin");

function trocaCor() {
    botaoCor.style.display = "none";
    botaoCor1.style.display = "grid";
    FundoIndex.style.backgroundColor = "#000000";
    linkOpcao[1].style.color = "#ffffff";
    linkOpcao[3].style.color = "#ffffff";
    linksPag[0].style.color = "#ffffff";
    linksPag[1].style.color = "#ffffff";
    linksPag[2].style.color = "#ffffff";
    linksPag[3].style.color = "#ffffff";
    tituloIndex.style.color = "#ffffff";
  }
  
  function voltarCor() {
    botaoCor.style.display = "grid";
    botaoCor1.style.display = "none";
    FundoIndex.style.backgroundColor = "#ffffff";
    linkOpcao[1].style.color = "#000000";
    linkOpcao[3].style.color = "#000000";
    linksPag[0].style.color = "#000000";
    linksPag[1].style.color = "#000000";
    linksPag[2].style.color = "#000000";
    linksPag[3].style.color = "#000000";   
    tituloIndex.style.color = "#000000";
  }