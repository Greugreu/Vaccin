<?php

include 'includes/pdo.php';
include 'functions/functions.php';
include 'functions/queryPdo.php';

$title = 'Inscription';
$errors = array();

if (!empty($_POST['inscription'])) {
    $mail = clean($_POST['mail']);
    $mdp = clean($_POST['mdp']);
    $confirm_mdp = clean($_POST['confirm_mdp']);

    $errors = array();
    $errors = cleanMail($errors, $mail, 'mail');
    $errors = passwordValid($mdp, $errors, 3, 'mdp');

    $sql = "SELECT * FROM vaccin.user";
    $query = $pdo->prepare($sql);
    $query->execute();
    $reqres = $query->fetch(PDO::FETCH_ASSOC);

    $reqmail = $reqres['usermail'];

    if (empty($reqmail)) {
        if ($mdp === $confirm_mdp) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $token = generateToken();
            $ip = $_SERVER['REMOTE_ADDR'];
            $reqInsert = "INSERT INTO user VALUES ('', :mail, :mdp, '', '', '', '', '', :token, :ip)";
            $query= $pdo->prepare($reqInsert);
            $query->bindValue(':mail', $mail, PDO::PARAM_STR);
            $query->bindValue(':mdp', $mdp);
            $query->bindValue(':token', $token);
            $query->bindValue(':ip', $ip);
            $query->execute();
            echo '<p>Inscription OK</p>';
        } else {
            echo "<p>Un compte avec cette adresse existe déjà.</p>";
        }
    } else {
        $errors['mail'] = 'Les mots de passe ne correspondent pas';
    }
} else {
    echo 'Erreur dans le formulaire';
}
