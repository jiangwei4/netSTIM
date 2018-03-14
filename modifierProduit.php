
<?php
$login = "donovan";
$password = "root";
$nom = $_GET['nom'];




//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');


$result = mysqli_query($con, "SELECT * from Produits where nom='$nom'");

    while ($row = mysqli_fetch_row($result)){
       $details = $row[2];
       $quantite = $row[1];
    }
    echo'
    <fieldset>
    <legend> modification pour : '.$nom.'</legend>
    <input type="number" value="'.$quantite.'" min="0" id="quantite">
    <input type="text" value="'.$details.'" id="details">
    <input type="button" value="Modifer" name="'.$nom.'" onClick="ajouterModificationProduit(this)" />
    </fieldset>
    ';
    ?>