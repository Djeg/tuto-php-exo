<?php

// Création d'une variable $age de type int
$age = 25;
$sentence = '';

if ($age < 13) {
    $sentence = 'Vous êtes un enfant';
} else if ($age >= 13 && $age < 18) {
    $sentence = 'Vous êtes mineur';
} else if ($age >= 18 && $age < 60) {
    $sentence = 'Vous êtes majeur';
} else {
    $sentence = 'Vous êtes senior';
}
?>

<p>
    <?php echo $sentence; ?>
</p>