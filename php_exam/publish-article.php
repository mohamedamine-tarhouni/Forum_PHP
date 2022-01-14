
<?php require('actions/users/Security.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
    <?php include 'includes/navbar.php';?>
    <div class="container">
        <div class="form_div">
            <form  method="POST">
                <label for="title">Titre : </label><br>
                <input type="text" id="title" name="title"><br>
                <label for="description">Description : </label><br>
                <textarea id="description" name="description"></textarea><br><br>
                <input type="submit" value="Publier" name="submit">
            </form>
        </div>
    </div>
</body>

</html>

