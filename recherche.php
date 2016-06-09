<?php include_once('session.php'); $_SESSION['page'] = "recherche.php" ?>

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
