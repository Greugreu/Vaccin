

<?php

use classes\PdoDb;


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
        $naissance = clean($_POST['naissance']);
        $medecin = clean($_POST['medecin']);

        $errors = textValid($nom, $errors, 3, 50, 'nom');
        $errors = textValid($prenom, $errors, 3, 50, 'prenom');
        $errors = textValid($adresse, $errors, 3, 100, 'adresse');
        $errors = textValid($medecin, $errors, 3, 50, 'medecin');

        if (count($errors) == 0) {
            $query = new PdoDb();
            $query->updateInfo($nom, $prenom, $adresse, $naissance, $medecin);
        }

    } else {
        echo "<p>Erreur dans le formulaire. </p>";
    }
}
