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

