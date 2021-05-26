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

$jean = [
    'prenom' => 'Jean',
    'nom' => 'Dupont',
    'notes' => [19]
];

$leslie = [
    'prenom' => 'Leslie',
    'nom' => 'Dupont',
    'notes' => [19, 17, 13, 10]
];

$eleves = [$john, $jane, $jack, $jean, $leslie];

$classe = [
    'nom' => '5eme C',
    'eleves' => $eleves,
];

echo '<h1>Résultats de la classe ' . $classe['nom'] . '</h1>';

foreach ($classe['eleves'] as $eleve) {
    // On affiche le nom et le prénom de chaque élèves
    echo '<p>Élève '
        . $eleve['nom']
        . ' '
        . $eleve['prenom']
        . '</p>';

    // On ouvre la balise ul
    echo '<ul>';

    // On créer une variable total qui contiendra
    // l'addition de toutes nos notes
    $total = 0;

    // On obtient le nombre de notes
    $nombreNotes = count($eleve['notes']);

    foreach ($eleve['notes'] as $i => $note) {
        // on affiche la note de l'élève
        echo '<li>Note n°'
            . ($i + 1)
            . ' : '
            . $note
            . ' / 20'
            . '</li>';

        // on ajoute la note au total
        $total = $total + $note;
    }

    // On ferme la balise ul
    echo '</ul>';

    // On calcule la moyenne
    $moyenne = $total / $nombreNotes;

    echo '<p>Moyenne : ' . $moyenne . ' / 20</p>';
}
