<?php require('actions/users/Security.php');
require('actions/users/showUserProfileInfo.php'); 
require('actions/users/editPasswordAction.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?>
    <div class="container">
    <?php if (isset($errorMsg)) {echo "<p>" . $errorMsg . "</p>";} ?>
    <?php if (isset($user_mail)) { ?>
        <div class="form_div">
        <?php if (isset($error_MDP)) {
                    echo "<font color=red>" . $error_MDP . "</font>";
                } ?>
            <form method="POST">
            <div class="mb-3">
                    <label for="password" class="form-label">Votre mot de passe : </label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php 
                        if (isset($password)) { 
                            echo $password; 
                            } 
                            ?>">
                </div>
            <div class="mb-3">
                    <label for="new_password" class="form-label">Nouveau mot de passe : </label>
                        <input type="password" class="form-control" id="new_password" name="new_password" value="<?php 
                        if (isset($verif_new_password)) { 
                            echo $verif_new_password; 
                            } 
                            ?>">
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmer le mot de passe : </label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="<?php 
                        if (isset($confirm_password)) { 
                            echo $confirm_password; 
                            } 
                            ?>">
                </div>
                <a href="ProfileSettings.php?id=<?= $idOfusers ?>" class="btn btn-link"> Retour</a>
                <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
                <?php } ?>
            </form>
        </div>
    </div>
</body>

</html>