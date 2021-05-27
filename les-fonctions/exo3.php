<?php

function titre($titre)
{
    // return '<h1>' . $titre . '</h1>'; est équivalent à
    return "<h1>$titre</h1>";
}

function calculerMoyenne($notes)
{
    $total = 0;

    foreach ($notes as $note) {
        // $total = $total + $note; est l'équivalent de
        $total += $note;
    }

    return $total / count($notes);
}

function afficherEleves($eleves)
{
    $html = '';

    foreach ($eleves as $i => $eleve) {
        $numero = $i + 1;
        // $html = $html . (ect ....); est la méme chose que
        $html .= "<li>Élève n° $numero : {$eleve['nom']} {$eleve['prenom']}</li>";
    }

    return "<ul>$html</ul>";
}

$eleves = [
    ['nom' => 'Dupont', 'prenom' => 'Jean'],
    ['nom' => 'Dupont', 'prenom' => 'Jane'],
    ['nom' => 'Doe', 'prenom' => 'John'],
    ['nom' => 'Doe', 'prenom' => 'Jane'],
];

echo titre('Conseil de classe');
?>

<p>
    Test de la moyenne :
    <?php echo calculerMoyenne([13, 19, 6]); ?> / 20
</p>

<?php echo afficherEleves($eleves); ?>