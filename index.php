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
                <div class="title"><h1>Recherche</h1></div>
                <script>
                    $(".title").click(function() {
                        charger("accueil.php");
                    });
                </script>
                <section class="container-fluid">
                    <table class="table form-group" id="recherche-form">
                        <thead>
                            <tr>
                                <th>
                                    <label for="nom">Nom:</label>
                                    <input type="text" id="nom" class="form-control" />
                                </th>
                                <th>
                                    <label for="coul">Couleur:</label>
                                    <select class="form-control" id="coul">
                                        <option>Brun</option>
                                        <option>Bleu</option>
                                        <option>Rose</option>
                                        <option>Orange</option>
                                    </select>
                                </th>
                                <th>
                                    <label for="util">Utilisateur:</label>
                                    <input type="text" id="util" class="form-control" />
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <button class="btn btn-block btn-success" id="valider_rech">Rechercher</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </body>
</html>
