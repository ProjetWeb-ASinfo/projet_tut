<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array('id' => '',
                               'nom' => '',
                               'prenom' => '',
                               'login' => '',
                               'email' => '');
}
if (!isset($_SESSION['page'])) {
    $_SESSION['page'] = "connexion.php";
}

?>