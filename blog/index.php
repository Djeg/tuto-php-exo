<?php

require('./includes/functions.php');

// Nous pouvons établir une connexion à la base de données
// en utilisant la fonction mysqli_connect()
// Bien mettre : mysqli_connect('localhost', 'root', '', 'blog')
$connexion = mysqli_connect('mysql', 'root', 'root', 'blog');

// Ici nous créons une requête SQL. Cette requête nous
// de communiquer ce que nous voulons faire sur notre
// base de données.
$request = mysqli_query($connexion, "SELECT * FROM `articles`");

// Nous récupérons tout les articles de la base de données.
// Pour cela il suffit d'éxécuter notre requète et de récupérer
// tout les articles.
$articles = mysqli_fetch_all($request, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">

<?php $pageTitle = 'Mon Blog - Accueil'; ?>
<?php require('./includes/head.php'); ?>

<body>
    <!-- Inclusion d'un fichier PHP -->
    <?php require('./includes/menu.php'); ?>

    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Bienvenue sur mon blog</h1>
                <p class="lead mb-0">Ceci est un blog en PHP pour le fun</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <?php
                foreach ($articles as $article) {
                    echo afficherCarte($article);
                }
                ?>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
</body>

</html>