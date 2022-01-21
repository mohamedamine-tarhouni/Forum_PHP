<?php require('actions/users/register_parse.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <div class="container">
        <div class="form_div">
            <form method="POST">
                <?php if (isset($errorMsg)) {
                    echo "<font color=red>" . $errorMsg . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur : </label>
                    <!-- <?php if (!isset($username)) { ?>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                    <?php } else { ?>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $username ?>" aria-describedby="emailHelp">
                    <?php
                    } ?> -->
                        <input type="text" class="form-control" id="username" name="username" value="<?php 
                        if (isset($username)) { 
                            echo $username; 
                            } 
                            ?>" aria-describedby="emailHelp">
                

                </div>
                <?php if (isset($errorMsg_Username)) {
                    echo "<font color=red>" . $errorMsg_Username . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="mail" class="form-label">E-Mail : </label>
                    <?php if (!isset($mail)) { ?>
                        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                    <?php } else { ?>
                        <input type="email" class="form-control" id="mail" name="mail" value="<?= $mail ?>" aria-describedby="emailHelp">
                    <?php
                    } ?>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <?php if (isset($errorMsg_Mail)) {
                    echo "<font color=red>" . $errorMsg_Mail . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe : </label>
                    <?php if (!isset($password_verif)) { ?>
                        <input type="password" class="form-control" id="password" name="password">
                    <?php } else { ?>
                        <input type="password" class="form-control" id="password" name="password" value="<?= $password_verif ?>">
                    <?php
                    } ?>
                </div>
                <?php if (isset($error_MDP)) {
                    echo "<font color=red>" . $error_MDP . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmer le mot de passe : </label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
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