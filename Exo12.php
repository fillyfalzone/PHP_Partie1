
<h1> Exercice 12 </h1>

<p> A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective <br> (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>


<?php

$tabPrenomPays = [
    "Mickeal" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];


 ksort($tabPrenomPays);  // Trier le tableau par ordre alphabétique des prenoms

 var_dump($tabPrenomPays); // verifier le type de $tabPrenomPays

// Parcourir le tableau et ajouter le greeting selon le pays
 foreach($tabPrenomPays as $prenom => $pays){

        switch($pays){
            case "FRA":
                $greeting = "bonjour";
                break;
            case "ESP":
                $greeting = "hola";
                break;
            case "ENG":
                $greeting = "hello";
                break;
            default:
                echo "Pays inconnu";
        }

        echo "<br> $greeting $prenom <br>";
 }

 



?>