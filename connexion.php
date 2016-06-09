<?php include_once('session.php'); $_SESSION['page'] = "connexion.php" ?>

<section class="container-fluid">
    <div class="col-sm-12 col-xs-12 col-lg-12 connexionScreen">
        <div class="form-group">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" class="form-control" value="" />
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" class="form-control" value="" />
            <button id="valider" class="btn btn-success">Se connecter</button>
            <script>
                $("#valider").click(function() {
                    $.post("traitementconnexion.php",
                    {
                        username: $("#username").val(),
                        password: $("#password").val()
                    },
                    function (data, status) {
                        if (data == "Erreur mdp")
                            alert("Erreur! Mauvais mot de passe.");
                        else if (data == "Erreur champs")
                            alert("Erreur! Tous les champs doivent être remplis.");
                        else if (data == 'Valide')
                            charger("accueil.php");
                        else alert(data);
                    });
                });
            </script>
        </div>
    </div>
</section>