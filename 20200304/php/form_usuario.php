<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset = "UTF-8"/>
        <title>Exercício</title>

        <script>
            function checaDados(){
                nome = true;
                if(document.form.nome.value == ""){
                    nome = false;
                }

                email = true;
                if(document.form.email.value == ""){
                    email = false;
                }

                sexo = true;
                if(document.form.sexo.value == ""){
                    sexo = false;
                }

                dataNasc = true;
                if(document.form.dataNasc.value == ""){
                    dataNasc= false;
                }

                if(dataNasc && nome && email && sexo){
                    alert("Nome: " + document.form.nome.value + "\n" +
                        "E-mail: " + document.form.email.value + "\n" +
                        "Sexo: " + document.form.sexo.value + "\n" +
                        "Data de nascimento: " + document.form.dataNasc.value);
                }else{
                    texto = "Preencher: \n";

                    if(!nome){
                        texto += "Nome \n";
                    }

                    if(!email){
                        texto += "E-mail \n";
                    }

                    if(!sexo){
                        texto += "Sexo \n";
                    }

                    if(!dataNasc){
                        texto += "Data de Nascimento \n";
                    }

                    alert(texto);
                }
            }
        </script>
    </head>
    <body>
        <form name = "form" method = "post">
            <label>Nome</label>
            <input type = "text" name = "nome"/><br/>

            <label>Email</label>
            <input type = "text" name = "email"/><br/>

            <label>Sexo</label>
            <input type = "text" name = "sexo"/><br/>

            <label>Data de nascimento</label>
            <input type = "date" name = "dataNasc"/><br/>

            <input type = "button" value = "Enviar" onclick = "checaDados();">
        </form>
    </body>
</html>
