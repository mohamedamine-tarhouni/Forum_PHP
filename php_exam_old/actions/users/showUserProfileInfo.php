<?php
require('actions/connect.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfusers = $_GET['id'];
    $req_user_Exist = $mysql->prepare("SELECT * FROM users WHERE ID_User= ?");
    $req_user_Exist->execute(array($idOfusers));
    if ($req_user_Exist->rowCount() > 0) {
        $userInfos = $req_user_Exist->fetch();
        if ($userInfos['ID_User'] == $_SESSION['ID_User']) {
            $user_name=$userInfos['Username'];
            $user_mail=$userInfos['Mail'];
        } else {
            $errorMsg = "Qu'est ce tu fais la?";
        }
    } else {
        $errorMsg = "Cet user n'existe pas ou a été supprimé";
    }
} else {
    $errorMsg = "Aucune user n'a été trouvée";
}
