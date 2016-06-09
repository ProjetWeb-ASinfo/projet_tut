<?php include_once('session.php'); $_SESSION['page'] = "cartes_util.php" ?>

<div class="title"><h1>Mes cartes:</h1></div>
<script>
    $(".title").click(function() {
        charger("accueil.php");
    });
</script>
<section class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12" id="header-table">
        <button id="nouvelle" class="bnt btn-menu">Nouvelle carte</button>
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