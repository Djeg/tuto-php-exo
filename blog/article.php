<?php

require('./includes/functions.php');

// Nous pouvons établir une connexion à la base de données
// en utilisant la fonction mysqli_connect()
// Bien mettre : mysqli_connect('localhost', 'root', '', 'blog')
$connexion = mysqli_connect('mysql', 'root', 'root', 'blog');

$id = $_GET['id'];

// Ici nous créons une requête SQL. Cette requête nous
// de communiquer ce que nous voulons faire sur notre
// base de données.
$request = mysqli_query($connexion, "SELECT * FROM `articles` WHERE id = $id");

// Nous récupérons un seul article de la base de données.
// Pour cela il suffit d'éxécuter notre requète et de récupérer
// tout les articles.
$article = mysqli_fetch_assoc($request);
?>
<!DOCTYPE html>
<html lang="fr">

<?php $pageTitle = 'Mon Blog - ' . $article['titre']; ?>
<?php require('./includes/head.php'); ?>

<body>
    <!-- Inclusion d'un fichier PHP -->
    <?php require('./includes/menu.php'); ?>

    <!-- Page content-->

    <div class="container">
        <h1><?php echo $article['titre']; ?></h1>
        <p>
            <?php echo $article['contenue']; ?>
        </p>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
</body>

</html>