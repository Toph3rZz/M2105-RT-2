<?php

include './fonction.php';
getHeader (true,"Exercice 1");
?>
<div class="container">
    <form class="form-inline" method="post" action="ex1Valider.php">
        <fieldset>
            <legend>Connexion</legend>
            <div class="alert alert-info">Saisir votre nom et valider</div>
            <div class="form-group">
                <input placeholder="Nom..." class="form-control" type="text" name="nom">
                <input class="btn btn-primary" type="submit" value="Valider">
            </div>
        </fieldset>
        <input type="checkbox" name="remember" value="Enregistrer votre nom d'utilisateur">Enregistrer votre nom utilisateur
        <?php
        ?>
    </form>
</div>
<?php
getFooter();
