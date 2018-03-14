
<?php
$login = "donovan";
$password = "root";

$nom = $_GET['nom'];
$quantite = $_GET['quantite'];
$details = $_GET['details'];

//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');

//mise a jour du details et de la quantité
mysqli_query($con, "UPDATE Produits SET details='$details' WHERE nom='$nom'") or die ('Erreur lors de l\'envoi');
mysqli_query($con, "UPDATE Produits SET quantite='$quantite' WHERE nom='$nom'") or die ('Erreur lors de l\'envoi a cause de l accent a quantité qu il faut que je change dans la base de donnée');
echo '<h1>produit modifié merci de recharger la page</h1>';
?>