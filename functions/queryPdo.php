<?php

include 'includes/pdo.php';

function selectTableau($reqSelect)
{
    global $pdo;
    $result = $pdo->prepare($reqSelect);
    $result->execute();
    /* Récupération de toutes les lignes d'un jeu de résultats "équivalent à mysql_num_row() " */
    $resultat = $result->fetchAll();
    return $resultat;
}

function check($mail)
{
    global $pdo;
    $reqCheck = "SELECT COUNT(*) FROM vaccin.user WHERE usermail= $mail ";
    $result = $pdo->prepare($reqCheck);
    $result->execute();
    $result->fetchColumn();
    return $result;
}

function insert($mail, $mdp)
{
    global $pdo;
    $reqInsert = "INSERT INTO user VALUES ('', :mail, :mdp)";
    $query= $pdo->prepare($reqInsert);
    $query->bindValue('mail', $mail, self::PARAM_STR);
    $query->bindValue('mdp', $mdp);
    $query->execute();
}

function updateInfo($nom, $prenom, $adresse, $naissance, $medecin, $id)
{
    global $pdo;
    $reqUpdate = "UPDATE vaccin.user 
                    SET usernom=:nom, userprenom=:prenom, useradress=:adress, usernaissance=:naissance, usermedecin=:medecin
                    WHERE id=$id";
    $query = $pdo->prepare($reqUpdate);
    $query->bindValue(':nom', $nom, self::PARAM_STR);
    $query->bindValue(':prenom', $prenom, self::PARAM_STR);
    $query->bindValue(':adress', $adresse);
    $query->bindValue(':naissance', $naissance);
    $query->bindValue(':medecin', $medecin, self::PARAM_STR);
    $query->execute();

}
