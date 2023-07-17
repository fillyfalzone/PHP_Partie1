<?php

// ini variable
$chaineDeCaracteres =  "Notre formation DL commence aujourd'hui<br>";
//nbre de caracteres "str_word_count ()"
$nombreDeMots = str_word_count ($chaineDeCaracteres);
// Affichage
echo "La phrase: $chaineDeCaracteres contient $nombreDeMots mots.<br>";