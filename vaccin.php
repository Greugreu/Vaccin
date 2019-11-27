<?php
include 'includes/vaccin.inc.php';
/*include 'includes/header.php';*/
?>

<form action="" method="post">
    <label for="vaccin">Sélectionnez votre vaccin</label>
    <select name="vaccin" id="vaccin">
        <option value="Diphtérie">Diphtérie</option>
        <option value="Tétanos">Tétanos</option>
        <option value="Poliomyélite">Poliomyélite</option>
        <option value="Tuberculose">Tuberculose</option>
        <option value="Coqueluche">Coqueluche</option>
        <option value="Rubéole">Rubéole</option>
        <option value="Rougeole">Rougeole</option>
        <option value="Oreillons">Oreillons</option>
        <option value="Varicelle">Varicelle</option>
        <option value="Grippe">Grippe</option>
        <option value="Hépatite_B">Hépatite_B</option>
        <option value="Zona">Zona</option>
    </select>
    <label for="vaclot">Numéro de lot du vaccin</label>
    <input type="text" name="vaclot" id="vaclot">
    <label for="vacdate">A quel date votre vaccin a été fait ?</label>
    <input type="date" name="vacdate" id="vacdate">
    <input type="submit" value="Envoyer" name="vaccination">
</form>

<?php
include 'includes/footer.php'
?>
