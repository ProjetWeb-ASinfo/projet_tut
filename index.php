<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <style type="text/css">
            #valider {
                margin-top: 5%;
                margin-left: auto;
                margin-right: auto;
                width: 75%;
                height: auto;
                border-radius: 17px;
                font-size: 300%;
            }
        </style>
    </head>
    <body>
        <?php include_once('session.php'); ?>
        <section class="container-fluid">
            <div class="col-sm-12 col-xs-12 col-lg-12 mainDisplay">
                <form class="form-group">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" class="form-control" />
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" class="form-control" />
                    <button id="valider" class="btn btn-success">Se connecter</button>
                </form>
            </div>
        </section>
    </body>
</html>
