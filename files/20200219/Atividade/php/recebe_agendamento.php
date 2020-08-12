<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/bootstrap.min.css" />

        <title>Agendamento recebido</title>
    </head>
    <?php
        include "../inc/menu.inc";
    ?>
    <body>
        <?php
            if(!empty($_POST)){
                if(!file_exists("../xml/agendamentos.xml")){
                    $agendamentos =
'<?xml version = "1.0" encoding = "UTF-8"?>
<agendamentos>
    <agendamento>
        <nome>' .$_POST["nome"]. '</nome>
        <email>' .$_POST["email"]. '</email>
        <telefone>' .$_POST["telefone"]. '</telefone>
        <data>' .$_POST["data"]. '</data>
        <horas>' .$_POST["horas"]. '</horas>
    </agendamento>
</agendamentos>
';
                    file_put_contents("../xml/agendamentos.xml", $agendamentos);

                }else{
                    $agendamentos = simplexml_load_file('../xml/agendamentos.xml');
                    $achou = false;

                    foreach($agendamentos -> children() as $agendamento){
                        if(($_POST["data"] == $agendamento->data) && ($_POST["horas"] == $agendamento->horas)){
                            $achou = true;
                        }
                    }
                    if(!$achou){
                        $agendamento = $agendamentos -> addChild("agendamento");
                        $agendamento -> addChild('nome', $_POST["nome"]);
                        $agendamento -> addChild('email', $_POST["email"]);
                        $agendamento -> addChild('telefone', $_POST["telefone"]);
                        $agendamento -> addChild('data', $_POST["data"]);
                        $agendamento -> addChild('horas', $_POST["horas"]);

                        file_put_contents('../xml/agendamentos.xml', $agendamentos -> asXML());

                        echo "<h2 class = \"text-center\">Cadastrado com sucesso!</h2>";
                    }else{
                        echo "<h2 class = \"text-center\">Conflito de horários!</h2>";
                    }

                }
            }else{
                echo "<h2>Não há dados para agendar!</h2>";
            }
        ?>
        <script src = "../js/validaForm.js"></script>
        <script src = "../js/jquery-3.2.1.min.js"></script>
        <script src = "../js/popper.min.js"></script>
        <script src = "../js/bootstrap.min.js"></script>
    </body>
</html>
