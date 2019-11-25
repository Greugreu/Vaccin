<?php
include 'functions/auto_loader.php';
include 'functions/functions.php';

use classes\PdoDb;

//  Récupération de l'utilisateur et de son pass hashé
$errors = array();
$success = false;




$sql = "SELECT * FROM user
          WHERE id = :id";
$query = new PdoDb();
$resultat = $query->selectTableau($sql);

// Comparaison du pass envoyé via le formulaire avec la base
$userpass = password_verify($_POST['userpass'], $resultat['userpass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($userpass) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $usermail =$_POST['usermail'];
        $_SESSION['usermail'] = $usermail;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

