<?php require('actions/users/register_parse.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <div class="container">
        <div class="form_div">
            <form method="POST">
                <?php if (isset($errorMsg)) {
                    echo "<p>" . $errorMsg . "</p>";
                } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur : </label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <?php if (isset($errorMsg_Username)) {
                    echo "<p>" . $errorMsg_Username . "</p>";
                } ?>
                <div class="mb-3">
                    <label for="mail" class="form-label">E-Mail : </label>
                    <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <?php if (isset($errorMsg_Mail)) {
                    echo "<p>" . $errorMsg_Mail . "</p>";
                } ?>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">S'inscrire</button>
                <a href="login.php">
                    <p>J'ai déjà un compte </p>
                </a>
            </form>
        </div>
    </div>
</body>

</html>