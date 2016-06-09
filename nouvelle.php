<?php include_once('session.php'); $_SESSION['page'] = "nouvelle.php" ?>

<section class="container-fluid">
    <div class="title"><h1>Ajouter une carte</h1></div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group default-frame">
            <label for="nom">Nom de la carte:</label>
            <input type="text" class="form-control" id="nom" />
            <label for="coul">Couleur de la carte</label>
            <select class="form-control" id="coul">
                <option>Brun</option>
                <option>Bleu</option>
                <option>Rose</option>
                <option>Orange</option>
            </select>
            <button class="btn btn-success" id="valider">Ajouter la carte</button>
        </div>
    </div>
    <script>
        $(".title").click(function() {
            charger("cartes_util.php");
        });
    </script>
</section>