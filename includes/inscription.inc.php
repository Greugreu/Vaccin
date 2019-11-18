<?php

use \PdoDB;
new PdoDB\PdoDB($db);

if (isset($_POST['inscription'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";
    $confirm_mdp = isset($_POST['confirm_mdp']) ? $_POST ['confirm_mdp'] : "";

    $error = array();

    if ($mdp === $confirm_mdp) {
        $db->(
           "SELECT COUNT(*) FROM user WHERE usermail='" . $mail . "'"
        );

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

