<?php
include 'includes/pdo.php';
include 'functions/functions.php';
include 'includes/header.php';
$errors = array();
$success = false;
if(!empty($_POST['reset'])) {
$userpass = clean($_POST['userpass']);
$errors = passwordValid($userpass, $errors, 5, 'userpass');

    if (!empty($_GET['token'])) {
        $token = $_GET['token'];


        $sql = "SELECT * FROM user WHERE token ='" . $token . "'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $tokens = $query->fetch();


        if (!empty($tokens)) {
            $userpass = clean($_POST['userpass']);
            $errors = passwordValid($userpass, $errors, 5, 'userpass');
            $mdp = password_hash($userpass, PASSWORD_DEFAULT);
            $sql = "UPDATE user
    SET userpass ='" . $mdp . "'
    WHERE token ='" . $token . "'";
            $query = $pdo->prepare($sql);
            $query->execute();
        } else {
            echo 'error 404';
        }
    } else {
        echo 'error 404';
    }
}
?>
<div class="wrapper">
    <div class="container">

<form METHOD="post" ACTION="">
   <div class="signPass">
    <label for="userpass">nouveau mot de passe</label>
    <input class= "utilisateur" id="userpass" type="password" name=userpass value="">
    <span class="error">
        <?php if (!empty($errors['userpass'])){
            echo $errors['userpass'];
        } ?>
    </span>
   </div>
    <input type="submit" name="reset" value="Reset MDP">
</form>
    </div>
</div>

<?php
include 'includes/footer.php';