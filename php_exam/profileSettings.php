<?php require('actions/users/Security.php');
require('actions/users/showUserProfileInfo.php');
require('actions/users/editUserInfo.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container">
        <?php if (isset($errorMsg)) {
            echo "<p>" . $errorMsg . "</p>";
        } ?>
        <?php if (isset($user_mail)) { ?>
            <div class="form_div">
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d'utilisateur : </label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php
                                                                                                        echo $user_name;
                                                                                                        ?>" aria-describedby="emailHelp">
                    </div>
                    <?php if (isset($errorMsg_Username)) {
                        echo "<font color=red>" . $errorMsg_Username . "</font>";
                    } ?>
                    <div class="mb-3">
                        <label for="mail" class="form-label">E-Mail : </label>

                        <input type="email" class="form-control" id="mail" name="mail" value="<?php
                                                                                                echo $user_mail;
                                                                                                ?>" aria-describedby="emailHelp">
                    </div>
                    <?php if (isset($errorMsg_Mail)) {
                        echo "<font color=red>" . $errorMsg_Mail . "</font>";
                    } ?>
                    <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
                    <a href="edit-Password.php?id=<?= $idOfusers; ?>" class="btn btn-dark"> Modifier mot de passe</a>
                <?php } ?>
                </form>
            </div>
    </div>
</body>

</html>