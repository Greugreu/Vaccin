<?php

include 'includes/pdo.php';


function updateInfo($nom, $prenom, $adresse, $naissance, $medecin, $id)
{
    global $pdo;
    $reqUpdate = "UPDATE vaccin.user 
                    SET usernom=:nom, userprenom=:prenom, useradress=:adress, usernaissance=:naissance, usermedecin=:medecin
                    WHERE id=$id";
    $query = $pdo->prepare($reqUpdate);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':adress', $adresse);
    $query->bindValue(':naissance', $naissance);
    $query->bindValue(':medecin', $medecin, PDO::PARAM_STR);
    $query->execute();

}
