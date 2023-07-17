<h1>Exo 13</h1>

<p> 
Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.<br>
<code>
Affichage : <br>
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22
</code>
</p>

<?php

    $notes = [ 10, 12, 8, 19, 3, 16, 11, 13, 9];
    var_dump($notes);
    $nbrNote = count($notes); //taille du tableau
    $sommeNotes = array_sum($notes); // somme du tableau
    $moyenne = round($sommeNotes / $nbrNote, 2); //calcule de la moyenne arrondi à 2 chiffre après la virgule.

    echo "<br>La moyenne de l'élève est : ".$moyenne ; 



?>