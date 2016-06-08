<?php include_once('session.php'); ?>
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
    </head>
    <body>
        <div id="bg"></div>
        <script>
            function charger(path) {
                $("#content").css("transform", "scale(0,0)");
                setTimeout(function() {
                    $("#content").load(path);
                    $("#content").css("transform", "scale(1,1)");
                }, 500);
            }
        </script>
        <div id="content">
            <?php
                if ($_SESSION['users']['id']=='')
                    include 'connexion.php';
            ?>
        </div>
<div></div>
    </body>
</html>
