<?php

require ('actions/connect.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfArticles = $_GET['id'];
    // $req_Article_Exist = $mysql->prepare("SELECT * FROM articles WHERE ID_Article= ?");
    $req_Article_Exist = $mysql->prepare("SELECT Title,Description,Content,Date_Pub,Username 
    FROM articles 
    INNER JOIN users ON articles.ID_User=users.ID_User
    WHERE ID_Article= ?");
    $req_Article_Exist->execute(array($idOfArticles));
    if ($req_Article_Exist->rowCount() > 0) {
        $articleInfos = $req_Article_Exist->fetch();
        $article_title = $articleInfos['Title'];
        $article_Desc = $articleInfos['Description'];
        $article_Content = $articleInfos['Content'];
        $article_Date_Pub = $articleInfos['Date_Pub'];
        $article_Author = $articleInfos['Username'];
    }else{
        $errorMsg= "Cet article n'existe pas ou a été supprimé"; 
    }
}else{
    $errorMsg= "Aucun article trouvé";
}