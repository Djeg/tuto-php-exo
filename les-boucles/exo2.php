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

$jack = [
    'prenom' => 'Jack',
    'nom' => 'Doe',
    'notes' => [15, 18, 14, 6]
];

$jean = [
    'prenom' => 'Jean',
    'nom' => 'Dupont',
    'notes' => [19]
];

$eleves = [$john, $jane, $jack, $jean];

foreach ($eleves as $eleve) {
    // On affiche le nom et le prénom de chaque élèves
    echo '<p>Élève '
        . $eleve['nom']
        . ' '
        . $eleve['prenom']
        . '</p>';

    // On ouvre la balise ul
    echo '<ul>';

    foreach ($eleve['notes'] as $i => $note) {
        // on affiche la note de l'élève
        echo '<li>Note n°'
            . ($i + 1)
            . ' : '
            . $note
            . ' / 20'
            . '</li>';
    }

    // On ferme la balise ul
    echo '</ul>';
}
