<?php
include 'classes/PdoDb.php';
use classes\PdoDb;


require('includes/function.php');
$errors = array();
$success = false;
// Traitement du formulaire
// formulaire soumis ???
if(!empty($_POST['submitted'])) {

    // Faille XSS
    $nom     = clean($_POST['nom']);
    $prenom  = clean($_POST['prenom']);
    $email   = clean($_POST['email']);
    $message = clean($_POST['message']);

    // Validation nom
    // Pas vide, min 3 caracteres, max 120 caracteres
    $errors = textValid($errors,$nom,'nom',3,120);
    $errors = textValid($errors,$prenom,'prenom',3,120);
    $errors = textValid($errors,$message,'message',10,4000);
    $errors = cleanMail($errors,$email,'email');

    // no error
    if(count($errors) == 0) {
        // insert into
        $sucess = true;

        $sql = "INSERT INTO contact VALUES ('',:nom,:prenom,:email,:message)";
        $query = new PdoDb;
        $insert = $query->insertContact($nom, $prenom, $email, $message);
    }

    if ($sucess) {
        echo "Bien envoyé";
    } else {
        echo "Pas envoyé";
    }



}