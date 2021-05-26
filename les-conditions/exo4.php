<?php

// Création d'une variable $age de type int
$age = 8;
$sentence = '';

switch (true) {
    case $age < 13:
        $sentence = 'Vous êtes un enfant';
        break;
    case $age >= 13 && $age < 18:
        $sentence = 'Vous êtes mineur';
        break;
    case $age >= 18 && $age < 60:
        $sentence = 'Vous êtes majeur';
        break;
    default:
        $sentence = 'Vous êtes senior';
}
?>

<p>
    <?php echo $sentence; ?>
</p>