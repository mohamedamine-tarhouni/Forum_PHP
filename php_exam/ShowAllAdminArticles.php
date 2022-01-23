<?php
// // session_start();
// require('actions/users/Security.php'); 
require('actions/articles/showAllArticlesAction.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <form method="GET">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>

            </div>
        </form>
        <br>
        <?php
        while ($article = $getAllArticles->fetch()) {
        ?>
            <div class="card">
                <div class="card-header">
                    <a href="article.php?id=<?= $article['ID_Article'];?>">
                    <?= $article['Title']; ?>
                    </a>
                    <p></p>
                </div>
                <div class="card-body">
                    <?= $article['Description']; ?>
                    <a href="edit-article.php?id=<?= $article['ID_Article']; ?>" class="btn btn-warning"> Modifier</a>
                        <a href=actions/articles/deleteArticleAction.php?id=<?= $article['ID_Article']; ?>" class="btn btn-danger"> Supprimer</a>
                </div>
                <div class="card-footer">
                    Publié par <a href ="profile.php?id=<?= $article['ID_User']?>" ><?= $article['Username']; ?></a> le <?= $article['Date_Pub']; ?>
                </div>
            </div>
            <br>
        <?php
        }
        ?>


    </div>
</body>

</html>