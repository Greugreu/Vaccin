<?php
include 'includes/header.php';
include 'includes/contact.inc.php';
?>
<div class="backgroundForm">
<div class="wrapper">

        <h2>Nous contacter</h2>

        <form class="form" method="post" action="contact.php">
            <div class="contactNom">
                <label for="nom"></label>
                <input type="text" name="nom" id="nom" placeholder="Nom">
                <?php spanErr($errors, 'nom'); ?>
            </div>
            <div class="contactMail">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Email">
                <?php spanErr($errors, 'email');?>
            </div>
            <div class="contactMessage">
                <label for="message"></label>
                <textarea name="message" id="message" rows="8" cols="50" placeholder="Votre message" required></textarea>
                <?php spanErr($errors, 'message'); ?>
            </div>
            <input type="submit" name="submitted" value="Envoyer">
        </form>

</div>
</div>
<?php include 'includes/footer.php' ?>
