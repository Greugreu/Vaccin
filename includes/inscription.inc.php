<?php
include 'includes/pdo.php';
include 'functions/functions.php';


$title = 'Inscription';

$errors = array();

if (!empty($_POST['inscription'])) {
    $mail = clean($_POST['mail']);
    $mdp = clean($_POST['mdp']);
    $confirm_mdp = clean($_POST['confirm_mdp']);

    $errors = array();

    $errors = cleanMail($errors, $mail, 'mail');
    $errors = passwordValid($mdp, $errors , 3, 'mdp');

    if (count($errors) == 0) {
        if ($mdp === $confirm_mdp) {
            $attempt = check($mail);
            if ($attempt == 0) {
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);
                insert($mail, $mdp);

                echo '<p>Inscription OK</p>';
            } else {
                echo "<p>Un compte avec cette adresse existe déjà.</p>";
            }

        } else {
            $errors['check'] = 'Les mots de passe ne correspondent pas';
        }
    } else {
        echo 'Erreur dans le formulaire';
    }

}
