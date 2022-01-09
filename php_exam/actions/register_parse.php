<?php
require("connect.php");
include("functions.php");
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['mail'])) {
        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //Verifier si l'utilisateur existe dans la bdd
        $req_User_Exists = User_exists($username, "Username");
        $req_Mail_Exists = User_exists($mail, "Mail");
        if ($req_User_Exists->rowCount() == 0 && $req_Mail_Exists->rowCount() == 0) {
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
            }
            if ($req_Mail_Exists->rowCount() > 0) {
                $errorMsg_Mail = " Le mail $mail existe déjà";
            }
        }
    } else {
        $errorMsg = " Veuillez compléter tous les champs...";
    }
}
