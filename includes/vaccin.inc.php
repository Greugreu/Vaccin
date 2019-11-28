<?php
session_start();
include 'includes/pdo.php';
include 'functions/functions.php';

$title = 'Vaccination';

$errors = array();

$nom = $_SESSION['usernom'];

$sql = "SELECT vnom FROM vaccin";
$query = $pdo->prepare($sql);
$query->execute();
$vaccin = $query->fetchAll(PDO::FETCH_ASSOC);


if (!empty($_POST['vaccination'])) {
    $vlot = $_POST['vaclot'];
    $inoc = $_POST['vacdate'];
    $vnom = $_POST['vaccin'];

    $errors = array();
    $errors = formselect($errors, $vaccin, 'vaccin');
    $errors = inputDate($errors, $inoc, 'inoc');

    $sql = "SELECT
              u.id,
              v.id,
              v.voblig
            FROM
              user AS u
            CROSS JOIN
              vaccin AS v
            WHERE
              usernom = '$nom'
            AND
              vnom = '$vnom'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
//   debug($data);
    $vid = $data[0]['id'];
    $voblig = $data[0]['voblig'];
    $uid = $data[0]['id'];

    if(count($errors) == 0) {

        $sql = "INSERT INTO 
                    uservac
                VALUES
                    (:userid, :vacid, :username, :uservacname, :uservaclot, NULL, NULL)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':userid', $uid, PDO::PARAM_INT );
        $query->bindValue(':vacid', $vid, PDO::PARAM_INT );
        $query->bindValue(':username', $nom, PDO::PARAM_STR );
        $query->bindValue(':uservacname', $vnom, PDO::PARAM_STR );
        $query->bindValue(':uservaclot', $vlot, PDO::PARAM_STR);

        $query->execute();

    }
}

