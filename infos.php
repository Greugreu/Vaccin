<?php
include 'includes/header.php';
include_once 'includes/infos.inc.php';

?>
<h2>Bonjour, il semblerais que ce soit votre première connexion, il va nous falloir quelques informations
    supplémentaires.</h2>

<div class="wrapper">
    <div class="container">
        <form action="#" method="post">
            <label for="nom">Nom&nbsp;:</label>
            <input type="text" name="nom" id="nom" placeholder="Votre nom">
            <?php spanErr($errors, 'nom'); ?>
            <label for="prénom">Prénom&nbsp;:</label>
            <input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
            <?php spanErr($errors, 'prenom'); ?>
            <label for="adresse">Adresse&nbsp;:</label>
            <input type="text" name="adresse" id="adresse" placeholder="Votre adresse">
            <?php spanErr($errors, 'adresse'); ?>
            <label for="naissance">Votre date de naissance</label>
            <input type="date" name="naissance" id="naissance">
            <label for="medecin">Votre medecin traitant&nbsp;:</label>
            <input type="text" name="medecin" id="medecin" placeholder="Médecin">
            <?php spanErr($errors, 'medecin'); ?>
            <input type="submit" name="infos" value="Envoyer">

        </form>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
