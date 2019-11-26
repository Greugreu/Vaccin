<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccin</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="../account.php?id=<?php echo $user['id'] ?>">Mon compte</a></li>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            }
            else {
                echo "<li><a href=\"index.php?page=login\">Login</a></li>";
            }
            ?>
            <li><a href="#">Contact</a></li>
            <li><a href="adminIndex.php">Admin</a></li>
        </ul>
    </nav>
</header>
<main>
