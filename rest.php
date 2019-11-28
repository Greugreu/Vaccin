<?php
include 'includes/pdo.php';
include 'functions/functions.php';
$errors = array();
$success = false;

if (!empty($_GET['token'])) {
    $token = $_GET['token'];


    $sql = "SELECT * FROM user WHERE token ='". $token ."'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $tokens = $query->fetch();



    if (!empty($tokens)) {
        $userpass = clean($_POST['userpass']);
        $mdp =   password_hash($userpass, PASSWORD_DEFAULT);
        $sql = "UPDATE user
    SET userpass ='". $mdp."'
    WHERE token ='" . $token . "'";
        $query = $pdo->prepare($sql);
        $query->execute();
    }else {
        echo 'error 400';
    }
}else{
    echo 'error 404';
}

?>


<form METHOD="post" ACTION="">
    <label for="userpass">nouveau mot de passe</label>
    <input class= "utilisateur" id="userpass" type="text" name=userpass value="">
    <span class="error">
        <?php if (!empty($errors['userpass'])){
            echo $errors['userpass'];
        } ?>
    </span>

    <input type="submit" name="reset" value="Reset MDP">
</form>
