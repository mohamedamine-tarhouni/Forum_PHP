<?php
session_start();
if(!isset($_SESSION['auth'])){
    header("Location: ../../login.php");
}
require('../connect.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfArticles = $_GET['id'];
    $req_Article_Exist = $mysql->prepare("SELECT * FROM articles WHERE ID_Article= ?");
    $req_Article_Exist->execute(array($idOfArticles));
    if ($req_Article_Exist->rowCount() > 0) {
        $articleInfos = $req_Article_Exist->fetch();
        if ($articleInfos['ID_User'] == $_SESSION['ID_User']) {
            $deleteArticle = $mysql->prepare("DELETE FROM articles WHERE ID_Article=?");
            $deleteArticle->execute(array($idOfArticles));
            echo "Article supprimé";
        } else {
            echo "Vous n'avez pas le droit pour modifier cet article";
            // $errorMsg = "Vous n'avez pas le droit pour modifier cet article";
        }
    }else{
        echo "Cet article n'existe pas ou a été supprimé"; 
    }
} else {
    echo "Aucun article trouvé";
}
