<?php require('actions/admin/adminConnection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
<br>
<center>  <h1 style="color:RoyalBlue; font: size 25px;">ADMIN PANEL</h1></center>
<br>
    <div class="container">
        <div class="form_div">
            <form method="POST">
                <?php if (isset($errorMsg)) {
                    echo "<font color=red>" . $errorMsg . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Nom : </label>


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

                    <input type="email" class="form-control" id="mail" name="mail" value="<?php
                                                                                            if (isset($mail)) {
                                                                                                echo $mail;
                                                                                            }
                                                                                            ?>" aria-describedby="emailHelp">

                </div>
                <?php if (isset($errorMsg_Mail)) {
                    echo "<font color=red>" . $errorMsg_Mail . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe : </label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php
                                                                                                        if (isset($password_verif)) {
                                                                                                            echo $password_verif;
                                                                                                        }
                                                                                                        ?>">
                </div>
                <?php if (isset($error_MDP)) {
                    echo "<font color=red>" . $error_MDP . "</font>";
                } ?>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmer le mot de passe : </label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">S'inscrire</button>
            </form>
        </div>
    </div>
</body>

</html>