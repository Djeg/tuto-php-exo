<?php

function afficherCarte($article)
{
    $id = $article['id'];
    $titre = $article['titre'];
    $description = $article['description'];

    // Ici nous utilisons la syntax Heredoc qui nous permet de
    // faire des chaînes de caractères sur plusieurs lignes !
    return <<<HTML
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">January 1, 2021</div>
                <h2 class="card-title h4">$titre</h2>
                <p class="card-text">$description</p>
                <a class="btn btn-primary" href="./article.php?id=$id">Read more →</a>
            </div>
        </div>
    HTML;
}
