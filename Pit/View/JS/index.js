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

        function emailMask(email) {
            var maskedEmail = email.replace(/([^@\.])/g, "*").split('');
            var previous	= "";
            for(i=0;i<maskedEmail.length;i++){
                if (i<=1 || previous == "." || previous == "@"){
                    maskedEmail[i] = email[i];
                }
                previous = email[i];
            }
            return maskedEmail.join('');
        }
