<?php
// session_start();
require('actions/users/Security.php');
require('actions/admin/showAllUsersAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <br>
        <?php
        while ($user = $getAllUsers->fetch()) {
        ?>
            <div class="card">
                <div class="card-header">
                    <a href="profile.php?id=<?= $user['ID_User']; ?>">
                        <?= $user['Username']; ?>
                    </a>
                    <p></p>
                </div>
                <div class="card-body">
                    <?php if (isset($_SESSION['authAdmin'])){?>
                    <a href="profileSettings.php?id=<?= $user['ID_User']; ?>" class="btn btn-warning"> Modifier</a>
                    <a href="actions/admin/deleteUserAction.php?id=<?= $user['ID_User']; ?>" class="btn btn-danger"> Supprimer</a>
                    <?php } ?>
                </div>
            </div>
            <br>
        <?php
        }
        ?>


    </div>
</body>

</html>