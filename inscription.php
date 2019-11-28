<?php
include 'includes/inscription.inc.php';
include 'includes/header.php';
?>
<div class="backgroundForm">
    <div class="wrapper">
        <div class="container">
            <h2>Inscription</h2>
            <form method="post" action="#">
                <div class="inscriptionMargin">
                    <label for="mail"></label>
                    <input type="email" name="mail" id="mail" placeholder="Votre adresse email" required>
                    <?php spanErr($errors, 'mail'); ?>
                </div>
                <div class="inscriptionMargin">
                    <label for="mdp"></label>
                    <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
                    <?php spanErr($errors, 'mdp'); ?>
                </div>
                <div class="inscriptionMargin">
                    <label for="confirm_mdp"></label>
                    <input type="password" name="confirm_mdp" id="confirm_mdp"
                           placeholder="Confirmez votre mot de passe" required>
                    <?php spanErr($errors, 'check'); ?>
                </div>
                <div class="inscriptionMargin">
                    <input type="submit" name="inscription" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>
