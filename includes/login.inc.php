<?php
include 'includes/pdo.php';
include 'functions/functions.php';
include 'functions/queryPdo.php';

<<<<<<< HEAD
//  Récupération de l'utilisateur et de son pass hashé

$errors = array();
$success = false;
if (!empty($_POST['login'])) {
    $usermail = clean($_POST['usermail']);
    $userpass = clean($_POST['userpass']);
=======
$errors = array();
$success = false;

if (!empty($_POST['login'])) {
    $usermail = clean($_POST['usermail']);
    $userpass = clean($_POST['userpass']);

>>>>>>> origin/feature/account
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
<<<<<<< HEAD
            $_SESSION['usermail'] = $usermail;
=======
            $_SESSION = $resultat;
>>>>>>> origin/feature/account
            echo 'Vous êtes connecté !';
        } else {
            echo 'Mauvais ident ou mot de passe !';
        }
    }
<<<<<<< HEAD


// Comparaison du pass envoyé via le formulaire avec la base
//$userpass = password_verify($_POST['userpass'], $resultat['userpass']);


=======
>>>>>>> origin/feature/account
}
