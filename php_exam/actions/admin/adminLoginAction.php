<?php
session_start();
require('actions/connect.php');
if (isset($_POST['submit'])) {
    //Verifier si les champs ne sont pas vides
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $userdata = htmlspecialchars($_POST['username']); //Email ou Username
        $password = htmlspecialchars($_POST['password']); //mot de passe

        //Verifier si l'utilisateur existe
        $req_User_Exists = $mysql->prepare("SELECT * FROM admin_users WHERE mail_Admin= ? OR name_Admin= ? ");
        $req_User_Exists->execute(array($userdata, $userdata));
        //si l'utilisateur existe on verifie si le mot de passe est correcte
        if ($req_User_Exists->rowCount() > 0) {
            $userInfos = $req_User_Exists->fetch();
            if (password_verify($password, $userInfos['MDP_Admin'])) {
                //authentification de l'utilisateur
                $_SESSION['authAdmin'] = true;
                $_SESSION['ID_Admin'] = $userInfos['ID_User'];
                $_SESSION['Adminname'] = $userInfos['Username'];
                $_SESSION['MDPAdmin'] = $userInfos['MDP'];
                $_SESSION['MailAdmin'] = $userInfos['Mail'];
                header('Location: index.php');
            } else { //faux mot de passe
                $errorMsg = "Veuillez verifier les données saisies";
            }
        } else { //Utilisateur inexistant
            $errorMsg = "Veuillez verifier les données saisies";
        }
    } else { //les champs ne sont pas tous complets
        $userdata = htmlspecialchars($_POST['username']); //Email ou Username
        $password = htmlspecialchars($_POST['password']); //mot de passe
        $errorMsg = "Veuillez Compléter tous les champs";
    }
}
