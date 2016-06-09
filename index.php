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
                    $("#content").load(path);
                    $("#content").css("transform", "scale(1,1)");
                    $("#content").css("transform", "");
                }, 500);
            }
        </script>
        <div id="bg">
            <div id="content">
                <?php
                    if ($_SESSION['users']['id']=='')
                        //include 'connexion.php';
                ?>
                <div class="title"><h1>Mes cartes:</h1></div>
                <section class="container-fluid">
                    <div class="col-xs-12 col-sm-12 col-md-12" id="header-table">
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Type</th>
                                        <th>Image</th>
                                    </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" id="card-table">
                        <table class="table">
                            <tbody>
                                <?php
                                    for ($i=1; $i<10; $i++) {
                                        echo '<tr>';
                                        echo "<td>Carte $i</td>"
                                            . "<td>Type $i</td>"
                                            . "<td><a id='$i' href='#modal-preview' data-toggle='modal'><img src='cards/card$i.png' alt='carte$i'></a></td>";
                                        echo '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <script>
                            $(".table a").click(function() {
                                $("#preview").attr("src", "cards/card"+$(this).attr("id")+".png");
                                $("#preview").attr("alt", "carte "+$(this).attr("id"));
                            });
                        </script>
                    </div>
                    <div id="modal-preview" class="modal fade">
                        <div class="modal-dialog">
                            <img id="preview" src="" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
