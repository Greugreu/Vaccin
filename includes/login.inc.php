<?php
include 'functions/auto_loader.php';
include 'functions/functions.php';
use classes\PdoDb;

//  Récupération de l'utilisateur et de son pass hashé
$errors = array();
$success = false;




$sql = "SELECT * FROM user
          WHERE id = $id";
$query = $pdo->prepare($sql);
$query->execute();
$record = $query->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$confmdp = password_verify($_POST['mdp'], $resultat['mdp']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($confmdp) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $email =$_POST['email'];
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

