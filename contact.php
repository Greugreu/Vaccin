<?php
include 'includes/header.php';
include 'includes/contact.inc.php';
?>
<!--<section class="contact">-->
<!--<h2>Nous contactez</h2>-->
<!--        <form action="contact.php" method="post">-->
<!--            <div class="w50">-->
<!--                <label for="nom"></label>-->
<!--                <input type="text" id="nom" name="nom" placeholder="Votre nom" required >-->
<!--                --><?php //spanErr($errors, 'nom'); ?>
<!--            </div>-->
<!--            <div class="w50">-->
<!--                <label for="email"></label>-->
<!--                <input type="text" id="email" name="email" placeholder="Votre adresse email" required>-->
<!--                --><?php //spanErr($errors, 'email'); ?>
<!--            </div>-->
<!---->
<!--            <div class="w50">-->
<!--                <label for="message"></label>-->
<!--                <textarea name="message" id="message" rows="8" cols="80" placeholder="Votre message" required></textarea>-->
<!--                --><?php //spanErr($errors, 'message'); ?>
<!--            </div>-->
<!---->
<!--            <input type="submit" name="submitted" value="Envoyer">-->
<!--        </form>-->
<!---->
<!--</section>-->
<!---->
<div class="wrapper">
    <div class="container">
        <h2>Nous contacter</h2>

        <form class="form" method="post" action="contact.php">
            <div class="contactNom">
                <label for="nom"></label>
                <input type="text" name="nom" id="nom" placeholder="Nom">
                <?php spanErr($errors, 'nom'); ?>
            </div>
            <div div="contactMail">
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
