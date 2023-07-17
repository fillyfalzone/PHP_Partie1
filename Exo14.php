<h1>Exo14</h1>
<p>
Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br>

<code>
    Affichage (si la date courante est le 21/05/2018 et la date de naissance le 
    17/01/1985) : Age de la personne : 33 ans 4 mois 4 jours 
</code>
</p>

<?php

function calculerAge(string $dateNaissance): string {
        $timestamp = new DateTime($dateNaissance);
        $now = new DateTime();
        $age = $timestamp -> diff($now);

        return "vous avez ". $age->format("%Y")." ans ". $age->format("%m")." mois et ".$age->format("%d")." jours <br>";
   
}

echo calculerAge("1993-02-22");


