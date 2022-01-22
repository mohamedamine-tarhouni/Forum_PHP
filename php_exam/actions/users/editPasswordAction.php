<?php
require('actions/connect.php');
include("actions/functions.php");
if (isset($_POST['submit'])) {
    if (!empty($_POST['password']) and !empty($_POST['new_password']) and !empty($_POST['confirm_password'])) {
        $password = htmlspecialchars($_POST['password']);
        $new_password =  password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        $verif_new_password = htmlspecialchars($_POST['new_password']);
        $req_User_Exists = $mysql->prepare("SELECT * FROM users WHERE ID_User=?");
        $req_User_Exists->execute(array($idOfusers));
        $info_User = $req_User_Exists->fetch();
        if (password_verify($password, $info_User['MDP'])) {
            if(!password_verify($verif_new_password, $info_User['MDP'])){
                if (final_Verification($verif_new_password, "mot de passe", 8, 25) == "true") {
                    if ($confirm_password == $verif_new_password) {
                        $edit_MDP = $mysql->prepare('UPDATE users SET MDP= ? WHERE ID_User=?');
                        $edit_MDP->execute(array($new_password, $idOfusers));
                        header('Location:profileSettings.php?id='.$idOfusers);
                    } else {
                        $error_MDP = "Veuillez confirmer le mot de passe";
                    }
                } else {
                    $error_MDP = final_Verification($verif_new_password, "nouveau mot de passe", 8, 25);
                }
            }else{
                $error_MDP = "Si tu veux pas changer le mot de passe tel qu'elle est, pourquoi t'es la?";
            }
        } else {
            $error_MDP = "Veuillez verifier que l'ancien mot de passe est correcte";
        }
    } else {
        $password = htmlspecialchars($_POST['password']);
        $new_password =  password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        $verif_new_password = htmlspecialchars($_POST['new_password']);
        $errorMsg = "Veuillez compléter tous les champs";
    }
}
