<?php

// Création de la variable $nom de type string
$nom = 'Doe';

// Création de la variable $prenom de type string
$prenom = 'John';

// Création de la variable $age de type int (entier)
$age = 30;
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