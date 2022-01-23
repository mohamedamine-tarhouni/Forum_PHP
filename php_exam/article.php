<?php 
require("actions/users/Security.php");
require('actions/articles/showArticleContentAction.php'); 
require('actions/articles/postAnswerAction.php');
require('actions/articles/showAllAnswersOfArticleAction.php');
?>
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
        <?php if (!isset($_SESSION['authAdmin'])){?>
            <form method="POST">
                <div class="mb-3">
                    <label for="answer" class="form-label">Réponse :</label>
                    <textarea name="answer" id="answer" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-success" type="submit" name="validate">Répondre</button>
                </div>
                
            </form>
            <?php } ?>

            <?php
                while($answer = $getAllAnswersOfThisArticle->fetch()){
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <?= $answer['Username']; ?>

                        </div>
                        <div class="card-body">
                            <?= $answer['Content']; ?>

                        </div>

                    </div>
                    <br><br>

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