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
        <script>
            function charger(path) {
                $("#content").css("transform", "scale(0,0)");
                setTimeout(function() {
                    $("#content").load(path, function(retour, status, xhr) {
                        if (status == "success") {
                            $("#content").css("transform", "scale(1,1)");
                            $("#content").css("transform", "");
                        } else if (status == "error")
                            location.reload();
                    });
                }, 500);
            }
        </script>
        <div id="bg">
            <div id="content">
                <?php //include $_SESSION['page']; ?>
            </div>
        </div>
    </body>
</html>
