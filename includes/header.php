<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo displayTitle(); ?></title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=produits">Actualités</a></li>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <li><a href="index.php?page=compte">Mon compte</a></li>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            }
            else {
                echo "<li><a href=\"index.php?page=login\">Login</a></li>";
            }
            ?>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
