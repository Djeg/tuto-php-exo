<?php

$john = [
    'prenom' => 'John',
    'nom' => 'Doe',
    'notes' => [12, 18, 14]
];

$jane = [
    'prenom' => 'Jane',
    'nom' => 'Doe',
    'notes' => [12, 18, 14, 6]
];

$jack = [
    'prenom' => 'Jack',
    'nom' => 'Doe',
    'notes' => [15, 18, 14, 6]
];

$eleves = [$john, $jane, $jack];

foreach ($eleves as $eleve) {
    // On affiche le nom et le prénom de chaque élèves
    echo '<p>Élève '
        . $eleve['nom']
        . ' '
        . $eleve['prenom']
        . '</p>';
}
