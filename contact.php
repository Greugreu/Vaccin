<form action="contact.inc.php" method="post">

    <label for="nom">Nom*</label>
    <input type="text" id="nom" name="nom" value="<?php if(!empty( $_POST['nom'])) {echo $_POST['nom'];} ?>">
    <span class="error"><?php if(!empty($errors['nom'])) { echo $errors['nom']; } ?></span>

    <label for="prenom">Prenom*</label>
    <input type="text" id="prenom" name="prenom" value="<?php if(!empty( $_POST['prenom'])) {echo $_POST['prenom'];} ?>">
    <span class="error"><?php if(!empty($errors['prenom'])) { echo $errors['prenom']; } ?></span>

    <label for="email">Email*</label>
    <input type="text" id="email" name="email" value="<?php if(!empty( $_POST['email'])) {echo $_POST['email'];} ?>">
    <span class="error"><?php if(!empty($errors['email'])) { echo $errors['email']; } ?></span>

    <label for="message">Message*</label>
    <textarea name="message" id="message" rows="8" cols="80"><?php if(!empty( $_POST['message'])) {echo $_POST['message'];} ?></textarea>
    <span class="error"><?php if(!empty($errors['message'])) { echo $errors['message']; } ?></span>

    <input type="submit" name="submitted" value="Envoyer">

</form>
