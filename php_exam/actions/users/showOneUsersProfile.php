<?php
require ('actions/connect.php');

//Récupérer l'identifiant de l'utilisateur
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'identifiant de l'utilisateur
    $idOfUser = $_GET['id'];

    //Vérifier si l'utilisateur existe
    $checkIfUserExists = $mysql->prepare('SELECT * FROM users WHERE ID_User = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount()>0){
        
        //Récupérer toutes les données de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();

        $user_pseudo = $usersInfos['Username'];

        //Récupérer toutes les questions publiées par l'utilisateur
        $getHisArticle = $mysql->prepare('SELECT ID_Article,Title,Description,Content,Date_Pub,Username 
        FROM articles 
        INNER JOIN users ON articles.ID_User=users.ID_User WHERE articles.ID_User = ? ORDER BY Date_Pub DESC');
        $getHisArticle->execute(array($idOfUser));
    }else{
        $errorMsg = "Utilisateur n'existe pas";

    }
}else{
    $errorMsg = "Aucun utilisateur trouvé";
}
