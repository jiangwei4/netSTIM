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
<tr><td>Nom</td><td>Quantité</td><td></td></tr>
</thead>
<tbody>';

while ($row = mysqli_fetch_row($result)){
    echo'
    <tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td><input type="button" value="Afficher le desciptif de ce produit" name="'.$row[0].'/'.$row[1].'" onClick="afficherDetails(this)" /></td></tr>';
}
echo'
</tbody>
</table>';
?>