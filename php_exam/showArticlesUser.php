<?php
require('actions/users/Security.php'); 
require('actions/articles/myArticlesAction.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <form method="GET">

            <!-- <input type="search" name="search">
        <button type="submit">Valider</button> -->

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
        while ($article = $getAllMyArticles->fetch()) {
        ?>
            <div class="card">
                <div class="card-header">
                    <?= $article['Title']; ?>
                    <p></p>
                </div>
                <div class="card-body">
                    <?= $article['Description']; ?>
                </div>
                <div class="card-footer">
                    Publié par <?= $article['Username']; ?> le <?= $article['Date_Pub']; ?>
                </div>
            </div>
            <br>
        <?php
        }

        ?>


    </div>
</body>

</html>