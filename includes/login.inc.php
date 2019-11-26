<?php
include 'includes/pdo.php';
include 'functions/functions.php';
include 'functions/queryPdo.php';



//  Récupération de l'utilisateur et de son pass hashé
$errors = array();
$success = false;
if(!empty($_POST['submitted'])) {
    $usermail = clean($_POST['usermail']);
    $userpass = clean($_POST['userpass']);
    $errors = cleanMail($errors, $usermail, 'usermail');
    $errors = passwordValid($userpass, $errors, 5, 'userpass');

    $sql = "SELECT COUNT(*) FROM user
          WHERE usermail=$usermail";
    $resultat = selectTableau($sql);

if ($resultat == 0){
      echo 'Mauvais identifiant ou mot de passe !';
}else{
    $sql = "SELECT userpass FROM user
          WHERE usermail=$usermail";
    $query = $pdo->prepare($sql);
    $query->execute();
        $result = $query->fetch();
    var_dump($result);
        $hash = $result['userpass'];

    if (password_verify($userpass, $hash)) {
       session_start();
       $_SESSION['usermail'] = $usermail;
       echo 'Vous êtes connecté !';
     }
     else {
       echo 'Mauvais ident ou mot de passe !';
    }
}


// Comparaison du pass envoyé via le formulaire avec la base
//$userpass = password_verify($_POST['userpass'], $resultat['userpass']);


}
