<?php
session_start();
require('actions/users/showOneUsersProfile.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br></br>
    <div class="container">
        <?php
        if (isset($errorMsg)) {
            echo $errorMsg;
        }

        if (isset($getHisArticle)) {
        ?>
            <div class="card">
                <div class="card-body">
                    <h4>@<?= $user_pseudo; ?></h4>
                    <hr>
                </div>
            </div>
            <br>

            <?php
            while ($article = $getHisArticle->fetch()) {
            ?>
                <div class="card">
                    <div class="card-header">
                        <a href="article.php?id=<?= $article['ID_Article']; ?>"><?= $article['Title']; ?></a>
                    </div>
                    <div class="card-body">
                        <?= $article['Description']; ?>
                        <br><br>
                        <?php if (!isset($_SESSION['authAdmin']) and $usersInfos['ID_User'] == $_SESSION['ID_User']) { ?>
                            <a href="edit-article.php?id=<?= $article['ID_Article']; ?>" class="btn btn-warning"> Modifier</a>
                            <a href=actions/articles/deleteArticleAction.php?id=<?= $article['ID_Article']; ?>" class="btn btn-danger"> Supprimer</a>
                        <?php } ?>
                    </div>
                    <div class="card-footer">
                        Par <?= $article['Username']; ?> le <?= $article['Date_Pub']; ?>
                    </div>
                </div>
                <br>
        <?php
            }
        }
        ?>
    </div>


</body>

</html>