<?php

// Création d'une variable $age de type int
$age = 25;

if ($age < 13) {
    echo 'Vous êtes un enfant';
} else if ($age >= 13 && $age < 18) {
    echo 'Vous êtes mineur';
} else if ($age >= 18 && $age < 60) {
    echo 'Vous êtes majeur';
} else {
    echo 'Vous êtes senior';
}

/* Voici les if / else en partant de l'age
   le plus eleve:

if ($age >= 60) {
    echo 'Vous êtes un senior';
} else if ($age >= 18) {
    echo 'Vous êtes majeur';
} else if ($age < 13) {
    echo 'Vous êtes un enfant';
} else {
    echo 'Vous êtes mineur';
}
*/
