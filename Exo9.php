<?php


$sexe = "H"; 
$age = 21;

$hommeImposable = $age >= 20 && $sexe == "H";
$femmeImposable = ($age >= 18 && $age <= 35) && $sexe == "F";

if($femmeImposable || $hommeImposable){
    echo "Vous êtes Imposable";
} else {
    echo "Vous êtes NON Imposable";
}



