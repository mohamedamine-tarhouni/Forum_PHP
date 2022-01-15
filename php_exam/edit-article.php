<?php 
require('actions/articles/editArticlesAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
    <?php include 'includes/navbar.php';?>
    <div class="container">
        <div class="form_div">
            <form  method="POST">
            <?php if (isset($errorMsg)) {
                    echo "<p>".$errorMsg."</p>";
                } ?>
                <div class="mb-3">
                <label for="title" class="form-label">Titre : </label><br>
                <input type="text" class="form-control" id="title" name="title"><br>
                </div>
                <div class="mb-3">
                <label for="description" class="form-label">Description : </label><br>
                <textarea class="form-control" id="description" name="description"></textarea><br><br>
                </div>
                <!-- <input type="submit" value="Publier" name="submit"> -->
                <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
            </form>
        </div>
    </div>
</body>
</html>