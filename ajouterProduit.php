<?php
$login = "donovan";
$password = "root";

$nom = $_GET['nom'];
$quantite = $_GET['quantite'];
$details = $_GET['details'];
//false si ce produit est unique
$test = false;



//connection à la base de données
$con = mysqli_connect('localhost', $login , $password , 'BDD') or die ('erreur de connexion au serveur');


$result = mysqli_query($con, "SELECT nom from Produits");
//on test si le nom n'existe pas deja 
    while ($row = mysqli_fetch_row($result)){
        if($row[0]==$nom){
        $test = true;
        }
    }
    if($test){
        echo 'impossible ce produit existe déjà';
    } else {
        if($nom=="" || $quantite=="" || $details=="") {
            echo 'Vous avez mal remplie le formulaire';
        } else {
        mysqli_query($con, "INSERT into Produits values ('$nom', '$quantite', '$details')") or die ('Erreur lors de l\'envoi');
        echo 'produit ajouté';
        }
    }

    ?>