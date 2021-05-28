<?php
// Définire le titre de notre page à "Mon Blog" si jamais
// la variable n'éxiste pas
// Pour cela nous pouvons utiliser la fonction "isset" qui permet
// de tester si une variable est définie (ex: isset($pageTitle))
if (!isset($pageTitle)) {
    $pageTitle = 'Mon Blog';
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $pageTitle; ?></title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>