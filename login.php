<?php
require 'includes/login.inc.php';
include 'includes/header.php';
?>

<div class="wrapper">
    <div class="container">

        <form METHOD="post" ACTION="">
           <div class="signMail">
            <label for="usermail">Rentrez votre adresse mail</label>
            <input class= "utilisateur" id="usermail" type="email" name=usermail value="">
            <span class="error">
        <?php if (!empty($errors['usermail'])){
            echo $errors['usermail'];
        } ?>
            </span>
           </div>

            <div class="signPass">
            <label for="userpass">Mot de Passe</label>
            <input class="modpasse" id="userpass" type="password" name="userpass" value="">
            <span class="error">
        <?php if (!empty($errors['userpass'])){
            echo $errors['userpass'];
        } ?>
            </span>
            </div>
            <input type="submit" name="login" value="Connection">
        </form>
        <p><a class="restmdp" href="resetMDP.php">J'ai oublié mon mot de passe</a> </p>
    </div>
</div>
