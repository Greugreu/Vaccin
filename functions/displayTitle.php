<?php
function displayTitle() : string
{
    $titre = "Titre ";
    $page = isset($_GET['page']) ? $_GET['page'] : "accueil";
    $titre .= ucfirst($page);
    return $titre;
}
