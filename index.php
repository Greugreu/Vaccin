<?php
session_start();

date_default_timezone_set('Europe/Paris');
include_once ('classes/PdoDb.php');
include_once ('functions/functions.php');



$title = 'Home page';

include('includes/header.php');
?>

    <h1>Home</h1>

<?php include ('includes/footer.php');
