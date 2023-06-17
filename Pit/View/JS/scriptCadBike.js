botaoCor = document.getElementById("botao-cor");
botaoCor1 = document.getElementById("botao-cor1");
FundoCadBike = document.getElementById("fundoCadBike");
barraPesquisa = document.getElementById("Pesquisa");
linksPag = document.getElementsByClassName("linkPaginaSite");

function trocaCor() {
  botaoCor.style.display = "none";
  botaoCor1.style.display = "grid";
  linksPag[0].style.color = "#ffffff";
  linksPag[1].style.color = "#ffffff";
  linksPag[2].style.color = "#ffffff";
  linksPag[3].style.color = "#ffffff";
  fundoCadBike.style.backgroundColor = "#000000";
  barraPesquisa.style.backgroundColor = "#ffffff";
  barraPesquisa.style.placeholder.color = "#000000"; 
  
}

function voltarCor() {
  botaoCor.style.display = "grid";
  botaoCor1.style.display = "none";
  linksPag[0].style.color = "#000000";
  linksPag[1].style.color = "#000000";
  linksPag[2].style.color = "#000000";
  linksPag[3].style.color = "#000000";
  fundoCadBike.style.backgroundColor = "#ffffff";
  barraPesquisa.style.backgroundColor = "#990D35";
}

/*#################### JS Input Imagem #########################
################################################################*/
const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Escolha uma imagem";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});

/*#################### Mascára telefone #########################
################################################################*/

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
