<?php include_once('session.php'); $_SESSION['page'] = "connexion.php" ?>


<?php
    $strconn="mysql:host=localhost;dbname=projet_tut";
    $db=new PDO ($strconn, 'root', '');

    if(isset($_POST['formconnexion']))
    {
        if(!empty($_POST['username']) AND !empty($_POST['password']))
        {
            $login = $_POST['username'];
            $password = $_POST['password'];
            $requser  = $db->prepare("SELECT * FROM users WHERE login = ? AND password = ?");
            $requser->execute(array($login, $password));
            $userexist = $requser->rowCount();
            if($userexist == 1)
            {
                $userinfo = $requser->fetch();
                $_SESSION['iduser'] = $userinfo['iduser'];
                $_SESSION['login'] = $userinfo['login'];
                $_SESSION['email'] = $userinfo['email'];
                ?>
                <script>function() {
                charger("accueil.php");
                });
                </script>
                <?php
            }
            else
            {
                $erreur = "Mauvais login ou mot de passe";
            }
        }
        else
        {
            $erreur = "Tous les champs doivent être complétés";
        }
    }   

?>



<section class="container-fluid">
    <div class="col-sm-12 col-xs-12 col-lg-12 connexionScreen">
        <form method="post" action ="">
            <div class="form-group">
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" id="username" class="form-control" value="" />
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" class="form-control" value="" />
                <button type = "submit" id="valider" class="btn btn-success">Se connecter</button>
            </div>
        </form>
        <?php
            if(isset($erreur))
            {
                echo $erreur;
            }
        ?> 
    </div>
</section>