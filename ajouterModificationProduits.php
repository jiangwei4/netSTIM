
<?php
$login = "donovan";
$password = "root";

$nom = $_GET['nom'];
$quantite = $_GET['quantite'];
$details = $_GET['details'];

//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');


mysqli_query($con, "UPDATE Produits SET quantité='$quantite'  and details='$details' WHERE nom='$nom'") or die ('Erreur lors de l\'envoi');

echo '<h1>produit modifié merci de recharger la page</h1>';
?>