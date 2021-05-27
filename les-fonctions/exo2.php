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

echo titre('Conseil de classe');
?>

<p>
    Test de la moyenne :
    <?php echo calculerMoyenne([13, 19, 6]); ?> / 20
</p>