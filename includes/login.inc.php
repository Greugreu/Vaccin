<?php
include 'includes/pdo.php';
include 'functions/functions.php';
include 'functions/queryPdo.php';

$errors = array();
$success = false;

if (!empty($_POST['login'])) {
    $usermail = clean($_POST['usermail']);
    $userpass = clean($_POST['userpass']);

    $errors = cleanMail($errors, $usermail, 'usermail');
    $errors = passwordValid($userpass, $errors, 5, 'userpass');

    $sql = "SELECT * FROM vaccin.user
          WHERE usermail = '" . $usermail . "'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $resultat = $query->fetch(PDO::FETCH_ASSOC);


    $mail = $resultat['usermail'];
    $mdp = $resultat['userpass'];

    if (empty($mail)) {
        echo 'Mauvais identifiant ou mot de passe !';
    } else {
        if (password_verify($userpass, $mdp)) {
            session_start();
            $_SESSION = $resultat;
            echo 'Vous êtes connecté !';
        } else {
            echo 'Mauvais ident ou mot de passe !';
        }
    }
}
