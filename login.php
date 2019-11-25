<?php
require 'includes/login.inc.php';
?>

<form METHOD="post" ACTION="">
    <label for="usermail">Rentrez votre adresse mail</label>
    <input class= "utilisateur" id="usermail" type="usermail" name=usermail value="">

    <label for="mdp">Mot de Passe</label>
    <input class="modpasse" id="mdp" type="password" name="mdp" value="">

    <input type="submit" value="Connection">
</form>