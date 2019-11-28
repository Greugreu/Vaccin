<?php
session_start();
include 'includes/compte.inc.php';
/*include 'includes/header.php';*/
include 'includes/pdo.php';
include 'functions/functions.php';
$session = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id='$session'";
$query = $pdo->query($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);
debug($data);

if (empty($data['usernom'])) {
    header('location:infos.php');
}

?>

<section>
    <h2>Mes informations</h2>
    <a href="index.php?id="><p>Modifier mes informations</p></a>
</section>
<section>
    <h2></h2>
</section>

<?php

include 'includes/footer.php';
