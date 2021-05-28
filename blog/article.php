<?php

require('./includes/functions.php');

// Nous pouvons établir une connexion à la base de données
// en utilisant la fonction mysqli_connect()
// Bien mettre : mysqli_connect('localhost', 'root', '', 'blog')
$connexion = mysqli_connect('mysql', 'root', 'root', 'blog');

?>
<!DOCTYPE html>
<html lang="fr">

<?php $pageTitle = 'Mon Blog'; ?>
<?php require('./includes/head.php'); ?>

<body>
    <!-- Inclusion d'un fichier PHP -->
    <?php require('./includes/menu.php'); ?>

    <!-- Page content-->

    <div class="container">
        <h1>Page d'un article</h1>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
</body>

</html>