<?php

function calculerMoyenne($notes)
{
    $total = 0;

    foreach ($notes as $note) {
        $total = $total + $note;
    }

    return $total / count($notes);
}

echo calculerMoyenne([13, 16, 1, 7]);
