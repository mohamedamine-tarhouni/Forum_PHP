
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
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur/E-mail : </label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Connexion</button>
                <a href="register.php"><p>Je n'ai pas de compte je m'inscris </p></a>
            </form>
        </div>
    </div>
</body>

</html>

