<?php
use classes\PdoDb;

if (isset($_POST['inscription'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";
    $confirm_mdp = isset($_POST['confirm_mdp']) ? $_POST ['confirm_mdp'] : "";

    $error = array();

    if ($mdp === $confirm_mdp) {
        $attempt = new PdoDB;
        if ($attempt->check($mail)->Object->result == 0) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $attempt->insert($mail, $mdp);

            echo 'Inscription OK';
        } else {
            echo "<h1>C'est pété !</h1>";
        }


    } else {
           array_push($error, "Les mots de passes ne correspondent pas.");
        };

        if (count($error) > 0) {
            $message = "<ul>";
            $i=0;
            while ($i < count($error)) {
                $message .= "<li>" . $error[$i] . "</li>";
                $i++;
            };

        $message .= "</ul>";

        echo $message;

        include "inscription.php";
    };

} else {
    include_once "inscription.php";
};
