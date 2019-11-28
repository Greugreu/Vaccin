<?php
include 'includes/pdo.php';
include 'functions/functions.php';

$title = 'Vaccination';

$errors = array();

if (!empty($_POST['vaccination'])) {
    $vaccin = $_POST['vaccin'];
    $inoc = $_POST['vacdate'];

    $errors = array();
    $errors = formselect($errors, $vaccin, 'vaccin');
    $errors = inputDate($errors, $inoc, 'inoc');



}

