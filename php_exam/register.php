<?php require('actions/register_parse.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <div class="container">
        <div class="form_div">
            <form method="POST">
                <?php if (isset($errorMsg)) {
                    echo "<p>".$errorMsg."</p>";
                } ?>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <?php if (isset($errorMsg_Username)) {
                    echo "<p>".$errorMsg_Username."</p>";
                } ?>
                <label for="password">Password :</label><br>
                <input type="password" id="password" name="password"><br>
                <label for="mail">Mail :</label><br>
                <input type="text" id="mail" name="mail"><br>
                <?php if (isset($errorMsg_Mail)) {
                    echo "<p>".$errorMsg_Mail."</p>";
                } ?>
                <input type="submit" value="S'inscrire" name="submit">
                <a href="login.php"><p>J'ai déjà un compte </p></a>
            </form>
        </div>
    </div>
</body>

</html>