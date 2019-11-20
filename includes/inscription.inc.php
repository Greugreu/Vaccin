<?php

use classes\PdoDb;

if (isset($_POST['inscription'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";
    $confirm_mdp = isset($_POST['confirm_mdp']) ? $_POST ['confirm_mdp'] : "";

    $error = array();

    trim(strip_tags($mail, $mdp));
    trim(strip_tags($confirm_mdp));
    trim(filter_var($mail, FILTER_VALIDATE_EMAIL));
    if (strlen($mail) > 50) {
        array_push($error, 'Votre adresse fait plus de 50 charactères.');
    }

    if (count($error) > 0) {
        $message = "<ul>";
        $i = 0;
        while ($i < count($error)) {
            $message .= "<li>" . $error[$i] . "</li>";
            $i++;
        };

        $message .= "</ul>";

        echo $message;

        include "inscription.php";

    } else {
        if ($mdp === $confirm_mdp) {
            $attempt = new PdoDB;
            $attempt->check($mail);
            if ($attempt->resultat == 0) {
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);
                $attempt->insert($mail, $mdp);

                echo '<p>Inscription OK</p>';
            } else {
                echo "<p>Un compte avec cette adresse existe déjà.</p>";
            }

        } else {
            array_push($error, "Les mots de passes ne correspondent pas.");
        };
    }

} else {
    include_once "inscription.php";
};
