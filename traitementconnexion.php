<?php
    include_once('session.php');
    
    $strconn="mysql:host=localhost;dbname=projet_tut";
    $db=new PDO ($strconn, 'root', 'password');

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
                $_SESSION['users']['id'] = $userinfo['iduser'];
                $_SESSION['users']['login'] = $userinfo['login'];
                $_SESSION['users']['email'] = $userinfo['email'];
                echo 'Valide';
            } else
                echo 'Erreur mdp';
        } else
            echo 'Erreur champs';
?>