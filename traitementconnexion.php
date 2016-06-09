<?php include_once('session.php'); $_SESSION['page'] = "traitementconnexion.php" ?>


<?php
	$strconn="mysql:host=localhost;dbname=projet_tut";
	$db=new PDO ($strconn, 'root', '');

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
	            <script>charger("accueil.php")</script>
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


?>