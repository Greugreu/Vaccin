<?php

use classes\PdoDb;

if (isset($_POST['infos'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : "";
    $naissance = isset($_POST['naissance']) ? $_POST['naissance'] : "";
    $medecin = isset($_POST['medecin']) ? $_POST['medecin'] : "";

    $error = array();

    strip_tags($nom, $prenom);
    strip_tags($adresse, $naissance);
    strip_tags($medecin);
    if (strlen($nom) > 50) {
        array_push($error, 'Votre nom fait plus de 50 charactères.');
    }
    if (strlen($prenom) > 50) {
        array_push($error, 'Votre prenom fait plus de 50 charactères.');
    }
    if (strlen($adresse) > 50) {
        array_push($error, 'Votre adresse fait plus de 50 charactères.');
    }
    if (strlen($medecin) > 50) {
        array_push($error, 'Votre médecin fait plus de 50 charactères.');
    }

    if (count($error) > 0) {
        $message = '<ul>';
        $i=0;
        while ($i < count($error)) {
           $message .= '<li>' . $error . '</li>';
           $i++;
        };

        echo $message;
        include 'infos.inc.php';

    } else {
        $insert = new PdoDb();
        $insert->insert()
    }
}
