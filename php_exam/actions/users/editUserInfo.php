<?php
require('actions/connect.php');
include("actions/functions.php");
if (isset($_POST['submit'])) {
    if (!empty($_POST['mail']) and !empty($_POST['username'])) {
        $user_name = htmlspecialchars($_POST['username']);
        $user_mail = nl2br(htmlspecialchars($_POST['mail']));
        $req_User_Exists = User_exists_Modif($user_name, "Username",$idOfusers);
        $req_Mail_Exists = User_exists_Modif($user_mail, "Mail",$idOfusers);
        if ($req_Mail_Exists->rowCount()==0 
        && $req_User_Exists->rowCount()==0 
        && final_Verification($user_name, "nom d'utilisateur", 2, 20) == "true") {
            $edit_user = $mysql->prepare('UPDATE users SET Username= ?, Mail= ? WHERE ID_User=?');
            $edit_user->execute(array($user_name, $user_mail, $idOfusers));
            header('Location:index.php');
        }else{
            if ($req_User_Exists->rowCount() > 0) {
                $errorMsg_Username = " Le pseudo $user_name existe déjà";
            }else if (final_Verification($user_name,"nom d'utilisateur",2,20)!= "true"){
                $errorMsg_Username=final_Verification($user_name,"nom d'utilisateur",2,20);
            }
            if ($req_Mail_Exists->rowCount()>0){
                $errorMsg_Mail="Le mail ".$user_mail." existe déjà";
            }
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs";
    }
}
