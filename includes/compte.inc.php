<?php
include 'includes/pdo.php';
include 'functions/functions.php';
include 'functions/queryPdo.php';

if(!empty($_SESSION['id']) && is_numeric($_SESSION['id'])){
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM vaccin.user WHERE id = $id";
    $query = $pdo->prepare($sql);
    $user = $query->fetch(PDO::FETCH_ASSOC);
}
