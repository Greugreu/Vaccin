<?php
include 'includes/pdo.php';
include 'functions/queryPdo.php';
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
        insertContact($nom, $email, $message);

        header('Location: index.php');

    }
}