<?php

$aPayer = 33;
$aVerser = 180;

$reste = $aVerser - $aPayer;

$nbreBilletDe10 = intdiv($reste,10);
$resteDiv = ($reste % 10);
$nbreBilletDe5 = intdiv($resteDiv,5);
$resteDiv = ($resteDiv % 5);
$nbrePieceDe2 = intdiv($resteDiv, 2);
$resteDiv = ($resteDiv % 1);
$nbrePieceDe1 = intdiv($nbrePieceDe2,1);

echo " Vous devez payer $aPayer euro<br>";
echo " Vous avez verser $aVerser euro<br>";
echo "le Reste est :  $reste  et vous sera remboursé en : <br>";

echo " nombre de billet de 10€: $nbreBilletDe10 <br>";
echo " nombre de billet de 5€: $nbreBilletDe5 <br>";
echo " nombre de pièce de 2€: $nbrePieceDe2 <br>";
echo " nombre de pièce de 1€: $nbrePieceDe1 <br>";
