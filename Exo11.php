<?php

$tabMarque = ["Peugeot", "Renault", "BMW", "Mercedes"];

for($i = 0; $i < count($tabMarque); $i++){
    echo "Marque n°: ".($i + 1)." ".$tabMarque[$i]."<br>";
}