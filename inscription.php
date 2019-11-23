<?php
include 'includes/inscription.inc.php';
include 'includes/header.php';
?>

<form method="post" action="#">
    <div>
        <label for="mail"></label>
        <input type="email" name="mail" id="mail" placeholder="Votre adresse email">
    </div>
    <div>
        <label for="mdp"></label>
        <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
    </div>
    <div>
        <label for="confirm_mdp"></label>
        <input type="password" name="confirm_mdp" id="confirm_mdp" placeholder="Confirmez votre mot de passe">
    </div>
    <input type="submit" name="inscription" value="Envoyer">
</form>

<?php include 'includes/footer.php'?>
