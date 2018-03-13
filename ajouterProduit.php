<?php
$login = "donovan";
$password = "root";

$nom = $_GET['nom'];
$quantite = $_GET['quantite'];
$details = $_GET['details'];
//false si ce produit est unique
$test = false;

//test si le nom n'existe pas deja 

//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');


$result = mysqli_query($con, "SELECT nom from Produits");
    while ($row = mysqli_fetch_row($result)){
        if($row[0]==$nom){
        $test = true;
        }
    }
    if($test){
        echo '<h1>impossible ce produit existe déjà</h1>';
    } else {
        if($nom=="" || $quantite=="" || $details=="") {
            echo '<h1>Vous avez mal remplie le formulaire</h1>';
        } else {
        mysqli_query($con, "INSERT into Produits values ('$nom', '$quantite', '$details')") or die ('Erreur lors de l\'envoi');
        echo '<h1>produit ajouté merci de recharger la page</h1>';
        }
    }

    ?>