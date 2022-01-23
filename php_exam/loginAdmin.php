<?php require('actions/admin/adminLoginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
  <center>  <h1>@ADMIN PANEL</h1></center>
    <div class="container">
        <div class="form_div">
            <form  method="POST">
            <?php if (isset($errorMsg)) {
                    echo "<p>".$errorMsg."</p>";
                } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur/E-mail : </label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php 
                        if (isset($userdata)) { 
                            echo $userdata; 
                            } 
                            ?>" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe : </label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php 
                        if (isset($password)) { 
                            echo $password; 
                            } 
                            ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Connexion</button>
            </form>
        </div>
    </div>
</body>

</html>

