<?php
    session_start();
    $nom=$_SESSION['nom'];
    $quantite=$_SESSION['quantite'];
    $details=$_SESSION['details'];
    echo    '<fieldset>
                <legend>Information du produit</legend>
                <table>
                <thead>
                    <tr><td>Nom</td><td>Quantité</td><td>Details</td></tr>
                </thead>
                <tbody>
                    <tr><td>'.$nom.'</td><td>'.$quantite.'</td><td>'.$details.'</td></tr>
                </tbody>
                </table>
            </fieldset>';
?>