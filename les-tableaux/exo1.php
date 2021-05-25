<?php

// Création de la variable $eleve de type array (tableaux)
$eleve = [
    // On déclare une clef "prenom" avec la valeur "John"
    'prenom' => 'John',
    // On déclare une clef "nom" avec la valeur "Doe"
    'nom' => 'Doe',
    // On déclare une clef "note" avec les notes
    'notes' => [12, 18, 19],
];
?>
<h1>
    Élève <?php echo $eleve['nom']; ?> <?php echo $eleve['prenom']; ?>
</h1>