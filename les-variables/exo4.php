<?php

// Création de la variable $nom de type string
$nom = 'Doe';

// Création de la variable $prenom de type string
$prenom = 'John';

// Création de la variable $age de type int (entier)
$age = 30;

// Création de la variable $note1 de type int (entier)
$note1 = 16;

// Création de la variable $note2 de type int (entier)
$note2 = 14;
?>
<!--
    Nous affichons le text « Bonjour $prenom $nom, vous avez $age ans ! »
    dans une balise h1 
-->
<h1>
    Bonjour <?php echo $prenom; ?>
    <?php echo $nom; ?>, vous avez
    <?php echo $age; ?> ans !
</h1>
<p>
    Vos notes : <?php echo $note1; ?> / 20,
    <?php echo $note2; ?> / 20
</p>