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
<ul>
    <li>Première note : <?php echo $eleve['notes'][0]; ?> / 20</li>
    <li>Seconde note : <?php echo $eleve['notes'][1]; ?> / 20</li>
    <li>Troisième note : <?php echo $eleve['notes'][2]; ?> / 20</li>
</ul>