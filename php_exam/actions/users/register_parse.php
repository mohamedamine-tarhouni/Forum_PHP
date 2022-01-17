<?php
session_start();
require("actions/connect.php");
include("actions/functions.php");
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['mail'])) {
        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password_verif= htmlspecialchars($_POST['password']);
        $password_confirm= htmlspecialchars($_POST['confirm_password']);
        //Verifier si l'utilisateur existe dans la bdd
        $req_User_Exists = User_exists($username, "Username");
        $req_Mail_Exists = User_exists($mail, "Mail");
        if ($req_User_Exists->rowCount() == 0 && $req_Mail_Exists->rowCount() == 0 
        &&final_Verification($username,"nom d'utilisateur",2,20)== "true"
        &&final_Verification($password_verif,"mot de passe",8,25)== "true"
        && $password_verif == $password_confirm) {
            
            //insertion de l'utilisateur dans la base de données
            $req_Add_User = $mysql->prepare('INSERT INTO users(Username,MDP,Mail) VALUES(?, ?, ?)');
            $req_Add_User->execute(array($username, $password, $mail));
            $getInfosOfThisUser = $mysql->prepare('SELECT ID_User,Username,Mail from users WHERE username = ? AND mail = ?');
            $getInfosOfThisUser->execute(array($username, $mail));
            $userInfos = $getInfosOfThisUser->fetch();

            // //authentification de l'utilisateur
            $_SESSION['auth'] = true;
            $_SESSION['ID_User'] = $userInfos['ID_User'];
            $_SESSION['Username'] = $userInfos['Username'];
            $_SESSION['MDP'] = $userInfos['MDP'];
            $_SESSION['Mail'] = $userInfos['Mail'];
            //Redirection vers la page d'Accueil
            header('Location: index.php');
        } else {
            if ($req_User_Exists->rowCount() > 0) {
                $errorMsg_Username = " Le pseudo $username existe déjà";
            }else if (final_Verification($username,"nom d'utilisateur",2,20)!= "true"){
                $errorMsg_Username=final_Verification($username,"nom d'utilisateur",2,20);
            }
            if (final_Verification($password_verif,"mot de passe",8,25)!="true"){
                $error_MDP=final_Verification($password_verif,"mot de passe",8,25);
            }else if ($password_verif != $password_confirm){
                $error_MDP="Veuillez confirmer le mot de passe";
            }
            if ($req_Mail_Exists->rowCount() > 0) {
                $errorMsg_Mail = " Le mail $mail existe déjà";
            }
        }
    } else {
        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $errorMsg = " Veuillez compléter tous les champs...";
    }
}
