
<?php require('actions/users/login_parse.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
    <div class="container">
        <div class="form_div">
            <form  method="POST">
            <?php if (isset($errorMsg)) {
                    echo "<p>".$errorMsg."</p>";
                } ?>
                <label for="username">Username/E-Mail:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password :</label><br>
                <input type="password" id="pass" name="password"><br><br>
                <input type="submit" value="Connexion" name="submit">
                <a href="register.php"><p>Je n'ai pas de compte je m'inscris </p></a>
            </form>
        </div>
    </div>
</body>

</html>

