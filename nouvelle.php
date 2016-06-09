<?php include_once('session.php'); $_SESSION['page'] = "nouvelle.php" ?>

<section class="container-fluid">
    <div class="title"><h1>Ajouter une carte</h1></div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group" id="add-form">
            <label for="type">Type de carte:</label>
            <input type="text" class="form-control" id="type" />
            <label for="nom">Nom de la carte:</label>
            <input type="text" class="form-control" id="nom" />
            <label for="num">Numéro de la carte:</label>
            <input type="number" class="form-control" id="num" min="1" max="10" />
            <button class="btn btn-success" id="valider">Ajouter la carte</button>
        </div>
    </div>
    <script>
        $(".title").click(function() {
            charger("cartes_util.php");
        });
    </script>
</section>