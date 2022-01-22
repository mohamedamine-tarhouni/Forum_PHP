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
<?php
    if(isset($article_Date_Pub)){
        ?>
        <section class="show-content">
            <h3><?=$article_title; ?></h3>
            <hr>
            <p><?= $article_Content; ?></p>
            <hr>
            <small>Publié par <?= $article_Author. ' le ' . $article_Date_Pub; ?></small>

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