<?php

function facture($prixHT, $nbreArticle, $tva){
    $tva = $prixHT * ($tva / 100);
    $aRegler = ($prixHT * $nbreArticle) + $tva ;
    return $aRegler;
}


echo "Vous devez regler: ".facture(15, 3, 20)."Euros<br>";