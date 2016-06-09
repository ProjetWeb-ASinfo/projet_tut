<section class="container-fluid">
    <div class="col-sm-12 col-xs-12 col-lg-12 connexionScreen">
        <div class="form-group">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" class="form-control" value="" />
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" class="form-control" value="" />
            <button id="valider" class="btn btn-success">Se connecter</button>
        </div>
        <script>
            $("#valider").click(function() {
                charger("accueil.php");
            });
        </script>
    </div>
</section>