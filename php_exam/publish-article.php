
<?php require('actions/Security.php'); ?>
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
                <label for="content">Contenu : </label><br>
                <textarea id="content" name="content"></textarea><br><br>
                <input type="submit" value="Publier" name="submit">
                <!-- <a href="register.php"><p>Je n'ai pas de compte je m'inscris </p></a> -->
            </form>
        </div>
    </div>
</body>

</html>

