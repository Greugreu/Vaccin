<?php
session_start();
$id = $_SESSION['id'];
include 'includes/pdo.php';
include 'functions/functions.php';
debug($id);
$errors = array();

if (!empty($_POST['infos'])) {
    $nom = !empty($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : "";
    $adresse = !empty($_POST['adresse']) ? $_POST['adresse'] : "";
    $naissance = !empty($_POST['naissance']) ? $_POST['naissance'] : "";
    $medecin = !empty($_POST['medecin']) ? $_POST['medecin'] : "";

    if(!empty($_POST['infos'])) {
        $nom = clean($_POST['nom']);
        $prenom = clean($_POST['prenom']);
        $adresse = clean($_POST['adresse']);
        $medecin = clean($_POST['medecin']);

        $errors = textValid($nom, $errors, 3, 50, 'nom');
        $errors = textValid($prenom, $errors, 3, 50, 'prenom');
        $errors = textValid($adresse, $errors, 3, 100, 'adresse');
        $errors = textValid($medecin, $errors, 3, 50, 'medecin');

        if (count($errors) == 0) {
            $reqUpdate = "UPDATE user 
                    SET usernom=:nom, userprenom=:prenom, useradress=:adress, usernaissance=:naissance, usermedecin=:medecin
                    WHERE id='$id'";
            $query = $pdo->prepare($reqUpdate);
            $query->bindValue(':nom', $nom, PDO::PARAM_STR);
            $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
            $query->bindValue(':adress', $adresse);
            $query->bindValue(':naissance', $naissance);
            $query->bindValue(':medecin', $medecin, PDO::PARAM_STR);
            $query->execute();;
        }

    } else {
        echo "<p>Erreur dans le formulaire. </p>";
    }
}
