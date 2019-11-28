<?php
include 'includes/pdo.php';
include 'functions/functions.php';
include 'functions/queryPdo.php';

//L'utilisateur renseigne son mail
//Le mail est check dans la DB
//Si présent, un mail avec URL avec token est envoyé, exemple "localhost/vaccin/reset.php?token=$token"
//Check du token dans la db
//Si oui, redirection vers fomulaire de reset mdp
//une fois remplis, Update de la DP.

//Tout les else, "va chier"

$errors = array();
$success = false;
if (!empty($_POST['reset'])) {
    $usermail = clean($_POST['usermail']);
    $errors = cleanMail($errors, $usermail, 'usermail');

    $sql = "SELECT * FROM user
            WHERE usermail='" . $usermail . "'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $resultat = $query->fetch(PDO::FETCH_ASSOC);
    $mail = $resultat['usermail'];
    $token = $resultat['token'];
    $message = "<a href='rest.php?token=$token'>Changer mon mot de passe</a>";
    var_dump($message);
        if (!empty($resultat['usermail'])) {
         mail($mail, $message, $token);
            debug($message);
     } else {
           echo 'faux';
     }
}  ?>



<form METHOD="post" ACTION="">
    <label for="usermail">Rentrez votre adresse mail</label>
    <input class= "utilisateur" id="usermail" type="email" name=usermail value="">
    <span class="error">
        <?php if (!empty($errors['usermail'])){
            echo $errors['usermail'];
        } ?>
    </span>

    <input type="submit" name="reset" value="Reset MDP">
</form>

