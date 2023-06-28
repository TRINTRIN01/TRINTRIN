botaoCor = document.getElementById("botao-cor");
botaoCor1 = document.getElementById("botao-cor1");
FundoIndex = document.getElementById("fundoIndex");
tituloIndex = document.getElementById("tituloOpcao");
linkOpcao = document.getElementsByClassName("linkDirecLogin");

function trocaCor() {
    tituloIndex.style.color = "#ffffff";
    botaoCor.style.display = "none";
    botaoCor1.style.display = "grid";
    FundoIndex.style.backgroundColor = "#000000";
    linkOpcao[1].style.color = "#ffffff";
    linkOpcao[3].style.color = "#ffffff";   
  }
  
  function voltarCor() {
    botaoCor.style.display = "grid";
    botaoCor1.style.display = "none";
    FundoIndex.style.backgroundColor = "#ffffff";
    tituloIndex.style.color = "#000000";
    linkOpcao[1].style.color = "#000000";
    linkOpcao[3].style.color = "#000000"; 
  }