<!DOCTYPE html>
<html>
    <head>
        <title>Connect já</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo RAIZ; ?>" target="_self">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/style.css">
        <?php echo (file_exists("Css/{$url[0]}.css")) ? "<link rel=\"stylesheet\" href=\"Css/{$url[0]}.css\">" : ""; ?>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <?php echo (file_exists("Css/{$url[0]}.css")) ? "<link rel=\"stylesheet\" href=\"Css/{$url[0]}.css\">" : ""; ?>
    </head>
    <body>
        <div id="areaSuperior">
            <img id="logo" src="Images/logoConnect.jpg" alt="" />
            <div id="btnAreaCliente">
                <img src="Images/btnAreaCliente.jpg" alt="" />
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="home">Área do cliente</a></li>
                        <li><a href="home">Ínicio</a></li>
                        <li><a href="aempresa">A empresa</a></li>
                        <li><a href="internet">Internet</a></li>
                        <li><a href="cobertura">Cobertura</a></li>
                        <li><a href="assinaturas">Assinaturas</a></li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
