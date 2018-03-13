<?php
session_start();
$login = "donovan";
$password = "root";

//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');

$nom=$_GET['nom'];
$_SESSION['nom']=$_GET['nom'];;
$_SESSION['quantite']=$_GET['quantite'];

$result = mysqli_query($con, "SELECT details from Produits where nom='$nom'");


//s'il n'y a pas de details alors on affichera : pas de description pour ce produit
while ($row = mysqli_fetch_row($result)){
    if($row[0]=="" || $row[0]==null) {
        $_SESSION['details']="pas de description pour ce produit";
    } else {
    $_SESSION['details']=$row[0];
    }
  }

?>