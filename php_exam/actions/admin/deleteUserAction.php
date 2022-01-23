<?php
session_start();
if(!isset($_SESSION['authAdmin'])){
    header("Location: ../../login.php");
}
require('../connect.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfUsers = $_GET['id'];
    $req_User_Exist = $mysql->prepare("SELECT * FROM Users WHERE ID_User= ?");
    $req_User_Exist->execute(array($idOfUsers));
    if ($req_User_Exist->rowCount() > 0) {
        $UserInfos = $req_User_Exist->fetch();
        if (isset($_SESSION['authAdmin']) or $UserInfos['ID_User'] == $_SESSION['ID_User']) {
            $deleteUser = $mysql->prepare("DELETE FROM Users WHERE ID_User=?");
            $deleteUser->execute(array($idOfUsers));
            $deleteUser = $mysql->prepare("DELETE FROM Articles WHERE ID_User=?");
            $deleteUser->execute(array($idOfUsers));
            echo "User supprimé";
                header('Location: ../../showAllUsers.php');
            
        } else {
            echo "Aucun User trouvé";
            // $errorMsg = "Vous n'avez pas le droit pour modifier cet User";
        }
    }else{
        echo "Cet User n'existe pas ou a été supprimé"; 
    }
} else {
    echo "Aucun User trouvé";
}
