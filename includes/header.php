<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Vaccin</title>
<<<<<<< HEAD
    <link href="assets/css/styles.css" rel="stylesheet" />
=======
    <link href="./assets/css/styles.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
>>>>>>> origin/features/accueil.inc.php
</head>
<body class="b">
<header>


    <nav class="navigation">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="article.php">Actualités</a></li>
            <li><a href="inscription.php">Inscription</a></li>
<<<<<<< HEAD
            <li><a href="../account.php?id=<?php echo $user['id'] ?>">Mon compte</a></li>
            <li><a href="login.php">Login</a></li>
=======
            <li><a href="../account.php?id=">Mon compte</a></li>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            } else {
                echo "<li><a href=\"index.php?page=login\">Login</a></li>";
            }
            ?>
>>>>>>> origin/features/accueil.inc.php
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

</header>
<main>
