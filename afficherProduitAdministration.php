<?php
$login = "donovan";
$password = "root";

//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');

$result = mysqli_query($con, 'SELECT * from Produits');

//formation du tableau avec toutes les informations de la BDD
echo 
'<table>
<thead>
<tr><td>Nom</td><td>Quantité</td><td>Details</td><td></td></tr>
</thead>
<tbody>';

while ($row = mysqli_fetch_row($result)){
    echo'
    <tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td><input type="button" value="modifier ce produit" name="'.$row[0].'/'.$row[1].'" onClick="modifierProduit(this)" /><input type="button" value="supprimer ce produit" name="'.$row[0].'" onClick="supprimerProduit(this)" /></td></tr>';
}
echo'
</tbody>
</table>';
?>