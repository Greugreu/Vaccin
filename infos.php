<form action="index.php?page=infos" method="post">
    <label for="nom">Nom&nbsp;:</label>
    <input type="text" name="nom" id="nom" placeholder="Votre nom">
    <label for="prénom">Prénom&nbsp;:</label>
    <input type="text" name="prénom" id="prénom" placeholder="Votre prénom">
    <label for="adresse">Adresse&nbsp;:</label>
    <input type="text" name="adresse" id="adresse" placeholder="Votre adresse">
    <label for="naissance">Votre date de naissance</label>
    <select name="naissance" id="jourNaissance">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    <label for="moisNaissance"></label>
    <select name="naissance" id="moisNaissance">
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    <label for="anneeNaissance"></label>
    <select name="naissance" id="anneeNaissance">
        <?php
        for ($i = 1900; $i <= date("Y"); $i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    <label for="medecin">Votre medecin traitant&nbsp;:</label>
    <input type="text" name="medecin" id="medecin" placeholder="Médecin">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <label for="">&nbsp;:</label>
    <input type="text" name="">
    <button type="submit">Envoyer</button>
    <input type="hidden" name="infos" id="infos">

</form>
