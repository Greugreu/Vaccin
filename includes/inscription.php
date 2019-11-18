<!--<script>
    function validate(){

        if(!document.getElementById("mdp").value==document.getElementById("confirm_mdp").value)alert("Passwords " +
            "do no match");
        return document.getElementById("mdp").value==document.getElementById("confirm_mdp").value;
        return false;
    }

</script>
-->
<form method="post" action="index.php?page=inscription">
    <div>
        <label for="mail"></label>
        <input type="email" name="mail" id="mail" placeholder="Votre adresse email">
    </div>
    <div>
        <label for="mdp"></label>
        <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
    </div>
    <div>
        <label for="confirm_mdp"></label>
        <input type="password" name="confirm_mdp" id="confirm_mdp" placeholder="Confirmez votre mot de passe">
    </div>
    <input type="hidden" name="inscription">
    <button type="submit">Envoyer</button>
</form>

