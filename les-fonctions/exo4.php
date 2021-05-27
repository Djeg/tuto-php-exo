<?php

function calculerMoyenne($notes)
{
    $total = 0;

    foreach ($notes as $note) {
        // $total = $total + $note; est l'équivalent de
        $total += $note;
    }

    return $total / count($notes);
}

function afficherMoyenne($notes)
{
    $moyenne = calculerMoyenne($notes);

    return "<p>Moyenne : $moyenne / 20</p>";
}

function afficherNotes($notes)
{
    $html = '';

    foreach ($notes as $i => $note) {
        $numero = $i + 1;
        $html .= "<li>Note n°$numero : $note / 20</li>";
    }

    return "<ul>$html</ul>";
}

function afficherEleve($eleve)
{
    $nom = $eleve['nom'];
    $prenom = $eleve['prenom'];
    $notes = $eleve['notes'];

    $affichageEleve = "<p>Élève $nom $prenom</p>";
    $affichageNotes = afficherNotes($notes);
    $affichageMoyenne = afficherMoyenne($notes);

    return "<div>$affichageEleve $affichageNotes $affichageMoyenne</div>";
}

echo afficherEleve([
    'nom' => 'Dupont',
    'prenom' => 'Jean',
    'notes' => [13, 19, 13, 8, 15]
]);

$classe = [
    'rang' => '2nd',
    'section' => 'D',
    'profPrincipal' => 'Jean Martin',
    'eleves' => [
        [
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'notes' => [13, 19, 13, 8, 15]
        ],
        [
            'nom' => 'Dupont',
            'prenom' => 'Jane',
            'notes' => [12, 7, 19, 8, 15]
        ],
        [
            'nom' => 'Doe',
            'prenom' => 'John',
            'notes' => [14, 9, 13, 8]
        ],
        [
            'nom' => 'Doe',
            'prenom' => 'Jane',
            'notes' => [19, 20, 5, 8, 18]
        ],
    ]
];
