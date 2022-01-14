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
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
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
                <label for="password">Password :</label><br>
                <input type="password" id="password" name="password"><br>

                <input type="submit" value="S'inscrire" name="submit">
                <a href="login.php">
                    <p>J'ai déjà un compte </p>
                </a>
            </form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur : </label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">E-Mail : </label>
                <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</body>

</html>