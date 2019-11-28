<?php
include 'includes/vaccin.inc.php';
include 'includes/pdo.php';
/*include 'includes/header.php';*/



?>

<form action="" method="post">
    <label for="vaccin">Sélectionnez votre vaccin</label>
    <select name="vaccin" id="vaccin">

        <?php
        for ($i=0; $i < count($vaccin); $i++)
        {
            echo '<option value="'. $vaccin[$i]['vnom'] .' ">' . $vaccin[$i]['vnom'] . ' ' .
                '</span>';
}
        ?>
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
