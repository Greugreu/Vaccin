<?php
require 'includes/login.inc.php';
include 'includes/header.php';
?>

    <div class="wrapper">
        <div class="container">
            <h2>Bienvenue</h2>

            <form METHOD="post" ACTION="">
                <div class="signMail">
                    <label for="usermail"></label>
                    <input class= "utilisateur" id="usermail" type="email" name=usermail value=""
                           placeholder="Adresse mail">
                    <span class="error">
                        <?php if (!empty($errors['usermail'])){
                            echo $errors['usermail'];
                        } ?>
                    </span>
                </div>

                <div class="signPass">
                    <label for="userpass"></label>
                    <input class="modpasse" id="userpass" type="password" name="userpass" value=""
                           placeholder="Entrez votre mot
                    de passe">
                </div>
                <input type="submit" name="login" value="Connection">
            </form>
            <p><a class="restmdp" href="resetMDP.php">J'ai oublié mon mot de passe</a> </p>
        </div>
    </div>
<?php
include'includes/footer.php';
