<?php
include 'includes/contact.inc.php';
include 'includes/header.php';
?>
<section class="contact">

        <form action="contact.php" method="post">
            <div class="w50">
                <label for="nom"></label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom">
                <?php spanErr($errors, 'nom'); ?>
            </div>

            <div class="w50">
                <label for="email"></label>
                <input type="text" id="email" name="email" placeholder="Votre adresse email">
                <?php spanErr($errors, 'email'); ?>
            </div>

            <div class="w50">
                <label for="message"></label>
                <textarea name="message" id="message" rows="8" cols="80" placeholder="Votre message"></textarea>
                <?php spanErr($errors, 'message'); ?>
            </div>

            <input type="submit" name="submitted" value="Envoyer">
        </form>

</section>


<?php include 'includes/footer.php' ?>
