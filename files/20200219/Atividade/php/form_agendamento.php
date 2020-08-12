<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/bootstrap.min.css" />

        <title>Crie um agendamento</title>
    </head>
    <?php
        include "../inc/menu.inc";
    ?>
    <body>
        <div class = "container">
            <h2 class = "text-center"  style = "margin-top: 30px;">Faça um agendamento</h2>
            <form action = "recebe_agendamento.php" method = "POST">
                <div class = "row" style = "margin-top: 60px;">
                    <div class = "form-group col-6 offset-3">
                        <input class = "form-control" type = "text" name = "nome" placeholder = "Nome">
                    </div>
                </div>
                <div class = "row">
                    <div class = "form-group col-6 offset-3">
                        <input class = "form-control" type = "email" name = "email" placeholder="E-mail">
                    </div>
                </div>
                <div class = "row">
                    <div class = "form-group col-6 offset-3">
                        <input class = "form-control" type = "number" name = "telefone" placeholder = "Telefone">
                    </div>
                </div>
                <div class = "row">
                    <div class = "form-group col-6 offset-3">
                        <input class = "form-control" type = "date" name = "data">
                    </div>
                </div>
                <div class = "row">
                    <div class = "form-group col-6 offset-3">
                        <input class = "form-control" type = "time" name = "horas">
                    </div>
                </div>
                <div class = "row">
                    <div class = "form-group col-6 offset-3">
                        <div class = "float-left">
                            <button type = "reset" class = "btn btn-danger">
                                Limpar
                            </button>
                        </div>
                        <div class = "float-right">
                            <button type = "submit" class = "btn btn-primary">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src = "../js/jquery-3.3.1.min.js"></script>
        <script src = "../js/popper.min.js"></script>
        <script src = "../js/bootstrap.min.js"></script>
    </body>
</html>
