<?php

$eleve1 = [
    'nom' => 'Dupont',
    'prenom' => 'Jean',
    'age' => 12,
    'notes' => [12, 5, 19],
];

$eleve2 = [
    'nom' => 'Dupont',
    'prenom' => 'Jane',
    'age' => 13,
    'notes' => [17, 9, 12, 17],
];

$eleve3 = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'age' => 11,
    'notes' => [8, 19, 16],
];

$eleves = [$eleve1, $eleve2, $eleve3];

foreach ($eleves as $index => $eleve) {
    echo '<div>';
    echo '<p>'
        . $eleve['nom']
        . ' '
        . $eleve['prenom']
        . '</p>';

    echo '<ul>';

    foreach ($eleve['notes'] as $indexNote => $note) {
        echo '<li>' . $note . ' / 20</li>';
    }

    echo '</ul>';

    echo '</div>';
}

// foreach ($notes as $monIndex => $maNote) {
//     echo '<p>Note n°'
//         . $monIndex + 1
//         . ' est de '
//         . $maNote
//         . ' / 20</p>';
// }

// foreach ($eleve as $key => $value) {
//     echo '<p>' . $key . ' : ' . $value . '</p>';
// }
