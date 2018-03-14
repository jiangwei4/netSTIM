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
        <div id="detailPrd">
        </div>
            <legend> Liste des produits </legend>

            <?php
                include("afficherProduitAdministration.php");
            ?>
            <fieldset>
            <legend>Ajouter un produit</legend>
                <label>Nom</label><input type="text" id="nom"></br>
                <label>Quantité</label> <input type="number" min="0" id="quantite"></br>
                <label>Details</label><textarea rows="10" cols="20" id="details"></textarea></br>
                <input type="button" value="Envoyer" name="buttonEnvoyer" onClick="ajouterProduit()" />
                </fieldset>
            </br>
        </fieldset>
    </body>
    <footer></footer>
</html>