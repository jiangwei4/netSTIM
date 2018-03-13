<!Doctype html>
    <html lang="fr">
    <head>
        <title>ADMINISTRATION</title>
        <meta charset="utf-8">
        <link rel='stylesheet' type='text/css' href='acceuil.css'>
        <script src="acceuil.js"></script>
    </head>
    <body>
        <fieldset>
            <div id="ajouterProduit">
            </div>
            <legend> Liste des produits </legend>

            <?php
                include("afficherProduitAdministration.php");
            ?>
            <legend>Ajouter un produit</legend>
                <input type="text" id="nom">
                <input type="number" min="0" id="quantite">
                <input type="text" id="details">
                <input type="button" value="Envoyer" name="buttonEnvoyer" onClick="ajouterProduit()" />
            </br>
        </fieldset>
    </body>
    <footer></footer>
</html>