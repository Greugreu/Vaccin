<?php
include 'includes/pdo.php';
require 'functions/functions.php';

$errors = array();
$success = false;

if(!empty($_POST['submitted'])) {

    $nom     = clean($_POST['nom']);
    $email   = clean($_POST['email']);
    $message = clean($_POST['message']);

    $errors = array();


    $errors = textValid($nom, $errors,3, 120,'nom');
    $errors = textValid($message, $errors,10, 4000,'message');
    $errors = cleanMail($errors,$email,'email');



    if(count($errors) == 0) {

        $success = true;
        global $pdo;
        $sql = "INSERT INTO contact VALUES ('', :nom, :email, :message)";
        $query= $pdo->prepare($sql);
        $query->bindValue('nom', $nom, PDO::PARAM_STR);
        $query->bindValue('email', $email, PDO::PARAM_STR);
        $query->bindValue('message', $message, PDO::PARAM_STR);
        $query->execute();

        header('Location: index.php');

    }
}