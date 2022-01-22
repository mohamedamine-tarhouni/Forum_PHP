<?php 
require("actions/users/Security.php");
require('actions/articles/showArticleContentAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>
<br><br>
<div class="container">
<?php if (isset($errorMsg)) {echo "<p>" . $errorMsg . "</p>";} ?>
<?php if (isset($article_Author)) { ?>
    <?= $article_Author;?><br><br>
    <?= $article_title;?><br><br>
    <?= $article_Desc;?><br><br>
    <?= $article_Content;?><br><br>
    <?= $article_Date_Pub;?><br><br>
    <?php
}
?>
<?php
    if(isset($article_Date_Pub)){
        ?>
        <section class="show-content">
            <h3><?=$article_title; ?></h3>
            <hr>
            <p><?= $article_Content; ?></p>
            <hr>
            <small><?= $article_Author. ' ' . $article_Date_Pub; ?></small>

        </section>
        <br>
        <section class="show-answers">

            <form action="form-group" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                    <textarea name="answer" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-success" type="submit" name="validate">Répondre</button>
                </div>
                
            </form>

            <?php
                while($answer = $getAllAnswersOfThisArticle->fetch()){
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <?= $answer['pseudon']; ?>

                        </div>
                        <div class="card-body">
                            <?= $answer['contenu']; ?>

                        </div>

                    </div>


                    <?php
                }
            
            ?>

        </section>
    <?php 
    }
    ?>
</div>
</body>
</html>