<?php

$age = 20;

if ($age > 5 &&  $age < 8){
    echo "Poussin";
} elseif ($age < 9 ){
    echo "Pupille";
} elseif ($age < 11 ){
    echo "Minime";
} elseif ($age < 12 ){
    echo "Cadet";
} else {
    echo "Hors catégorie :(";
}