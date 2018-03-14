<?php
$login = "donovan";
$password = "root";

//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');

$nom=$_GET['nom'];

$result = mysqli_query($con, "DELETE from Produits where nom='$nom'");

echo 'produit supprimé';
?>