botaoCor = document.getElementById("botao-cor");
botaoCor1 = document.getElementById("botao-cor1");
FundoPerfil = document.getElementById("fundoRecuSenha");
linksPag = document.getElementsByClassName("linkPaginaSite");
botaoExc = document.getElementById("ExcConta");

function trocaCor() {
    botaoCor.style.display = "none";
    botaoCor1.style.display = "grid";
    FundoPerfil.style.backgroundColor = "#000000";
    linksPag[0].style.color = "#ffffff";
    linksPag[1].style.color = "#ffffff";
    linksPag[2].style.color = "#ffffff";
    linksPag[3].style.color = "#ffffff";
    botaoExc.style.backgroundColor = "#ffffff";
    botaoExc.style.color = "#000000";
}

function voltarCor() {
    botaoCor.style.display = "grid";
    botaoCor1.style.display = "none";
    FundoPerfil.style.backgroundColor = "#ffffff";
    linksPag[0].style.color = "#000000";
    linksPag[1].style.color = "#000000";
    linksPag[2].style.color = "#000000";
    linksPag[3].style.color = "#000000";
    botaoExc.style.backgroundColor = "#000000";
    botaoExc.style.color = "#ffffff";
}

function mascara_telefone ()
        {
           //limitador
         var tel = document.getElementById("tel").value
            console.log(tel)
          tel=tel.slice(0,14) //(pode limitar a quantidade de char na entrada pelo java script)
            console.log(tel)
          document.getElementById("tel").value=tel
     tel=document.getElementById("tel").value.slice(0,10)
            console.log(tel)
           
            //máscara
            var tel_formatado = document.getElementById("tel").value
            if (tel_formatado[0]!="(")
            {
                if(tel_formatado[0]!=undefined)
                {
                    document.getElementById("tel").value="("+tel_formatado[0];
                }
            }

            if (tel_formatado[3]!=")")
            {
                if(tel_formatado[3]!=undefined)
                {
                    document.getElementById("tel").value=tel_formatado.slice(0,3)+")"+tel_formatado[3]
                }
            }

            if (tel_formatado[9]!="-")
            {
                if(tel_formatado[9]!=undefined)
                {
                    document.getElementById("tel").value=tel_formatado.slice(0,9)+"-"+tel_formatado[9]
                }
            }
        }