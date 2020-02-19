<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/bootstrap.min.css" />

        <title>Lista de agendamentos</title>
    </head>
    <?php
        include "../inc/menu.inc";
    ?>
    <body>
        <div class = "container" style = "margin-top: 30px">
        <?php
            if(!file_exists('../xml/agendamentos.xml')){
                echo '<h2 class = \"text-center\">Não há agendamentos</h2>';
            }else{
                $agendamentos = simplexml_load_file("../xml/agendamentos.xml");
                echo '
                <h1 class = "text-center">Agendamentos</h1>
                <div class = "row justify-content-center"  style = "margin-top: 60px">
                    <table class = "table">
                        <thead class = "thead-dark">
                            <tr>
                                <th scope="width-auto">Nome</th>
                                <th scope="width-auto">E-mail</th>
                                <th scope="width-auto">Telefone</th>
                                <th scope="width-auto">Data</th>
                                <th scope="width-auto">Hora</th>
                            </tr>
                        </thead>
                        <tbody>';

                foreach($agendamentos->children() as $agendamento){
                    echo'
                        <tr>
                            <td scope="width-auto">'.$agendamento->nome.'</td>
                            <td scope="width-auto">'.$agendamento->email.'</td>
                            <td scope="width-auto">'.$agendamento->telefone.'</td>
                            <td scope="width-auto">'.$agendamento->data.'</td>
                            <td scope="width-auto">'.$agendamento->horas.'</td>
                        </tr>
                    ';
                }
                echo'
                        </tbody>
                    </table>
                ';
            }
        ?>
    </div>
    </body>
    <script src = "../js/jquery-3.3.1.min.js"></script>
    <script src = "../js/popper.min.js"></script>
    <script src = "../js/bootstrap.min.js"></script>
</html>
