<?php require('actions/articles/showArticleContentAction.php'); ?>
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
</div>
</body>
</html>