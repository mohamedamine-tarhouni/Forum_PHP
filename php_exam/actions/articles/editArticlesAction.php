<?php
require ('actions/connect.php');
if(isset($_GET['id']) AND !empty($_GET['id'])){
$idOfArticles = $_GET['id'];
$req_Article_Exist=$mysql->prepare("SELECT ID_Article FROM articles WHERE ID_Article= ?");
$req_Article_Exist->execute(array($idOfArticles));
if ($req_Article_Exist->rowCount() > 0) {
    $article_id_author= $_SESSION['ID_User'];
    $req_Article_Exist=$mysql->prepare("SELECT ID_User FROM articles WHERE ID_User= ?");
    $req_Article_Exist->execute(array($article_id_author));
}else{
    $errorMsg="Cette article n'existe pas ou a été supprimé";
}
}else{
    $errorMsg="Aucune Article n'a été trouvée";
}