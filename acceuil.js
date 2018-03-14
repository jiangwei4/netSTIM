
   
function afficherDetails(champ){
     //l'information champ est sous la forme nom/quantité   on va donc séparer les deux informations en nom et quantié
    delimiter = "/";
    for(i=0; i<champ.name.length; i++){
        if(champ.name[i] == delimiter){
            nom = champ.name.substring(0,i);
            quantite = champ.name.substring(i+1);
        }
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            document.location = "details.php";
        }
    }
    xhr.open("GET", "afficherDetails.php?nom="+nom+"&quantite="+quantite);
    xhr.send(null); 
}


function modifierProduit(champ){
    delimiter = "/";
    for(i=0; i<champ.name.length; i++){
        if(champ.name[i] == delimiter){
            nom = champ.name.substring(0,i);
            quantite = champ.name.substring(i+1);
        }
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            document.getElementById("detailPrd").innerHTML = xhr.responseText;
        }
    }
    xhr.open("GET", "modifierProduit.php?nom="+nom);
    xhr.send(null); 
}

function ajouterProduit(){
    var nom = document.getElementById("nom");
    var quantite = document.getElementById("quantite");
    var details = document.getElementById("details");
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            alert(xhr.responseText);
            window.location.reload();
        }
    }
    xhr.open("GET", "ajouterProduit.php?nom="+nom.value+"&quantite="+quantite.value+"&details="+details.value);
    xhr.send(null);
}

function supprimerProduit(champ){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
         alert(xhr.responseText);
         window.location.reload();
        }
    }
    xhr.open("GET", "supprimerProduit.php?nom="+champ.name);
    xhr.send(null);
}


function ajouterModificationProduit(champ){
    var quantite = document.getElementById("quantite");
    var details = document.getElementById("details");
        var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            alert(xhr.responseText);
            window.location.reload();
        }
    }
    xhr.open("GET", "ajouterModificationProduits.php?nom="+champ.name+"&quantite="+quantite.value+"&details="+details.value);
    xhr.send(null);
}

