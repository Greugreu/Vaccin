<?php
include 'includes/pdo.php';
include 'functions/functions.php';

if(!empty($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM vaccin.user WHERE id = $id";
    $query = select($sql);
    $user = $query->fetch();

    if (empty($user)) {
        die('404');
    }

} else {
    die('404');
}


?>

<section>
    <h2>Mes informations</h2>
    <a href="index.php?id="><p>Modifier mes informations</p></a>
</section>
