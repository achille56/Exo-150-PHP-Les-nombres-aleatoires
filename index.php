<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$numberRandom = rand(0, 50);
    echo "<div>$numberRandom</div>";


/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$numberRandom2 = rand(50, getrandmax());
    echo "<p>$numberRandom2</p>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$numberRandom3 = rand(0, 50);
    if ($numberRandom3 <= 25) {
        echo "<p>Vous avez gagné, le resultat est $numberRandom3</p>";
    } else {
        echo "<p>Vous avez perdu, le resultat est $numberRandom3</p>";
    }

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function geneNumberRandom ($min, $max) {
   $number = rand($min, $max);
   if ($number >= ($max -100)) {
       return geneNumberRandom($min, $max);
   }
   else {
       return $number;
   }
}
echo geneNumberRandom(100, 300);








