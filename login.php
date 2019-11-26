<?php
require 'includes/login.inc.php';
?>

<form METHOD="post" ACTION="">
    <label for="usermail">Rentrez votre adresse mail</label>
    <input class= "utilisateur" id="usermail" type="email" name=usermail value="">
    <span class="error">
        <?php if (!empty($errors['usermail'])){
            echo $errors['usermail'];
        } ?>
    </span>

    <label for="usepass">Mot de Passe</label>
    <input class="modpasse" id="userpass" type="password" name="userpass" value="">
    <span class="error">
        <?php if (!empty($errors['userpass'])){
            echo $errors['userpass'];
        } ?>
    </span>

    <input type="submit" name="submitted" value="Connection">
</form>