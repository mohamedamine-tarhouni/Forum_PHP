<?php
require('actions/connect.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfArticles = $_GET['id'];
    $req_Article_Exist = $mysql->prepare("SELECT * FROM articles WHERE ID_Article= ?");
    $req_Article_Exist->execute(array($idOfArticles));
    if ($req_Article_Exist->rowCount() > 0) {
        $articleInfos = $req_Article_Exist->fetch();
        if (isset($_SESSION['authAdmin']) or $articleInfos['ID_User'] == $_SESSION['ID_User']  ) {
            $article_title=$articleInfos['Title'];
            $article_desc=$articleInfos['Description'];
            $article_content=$articleInfos['Content'];
            $article_date=$articleInfos['Date_Pub'];
            $article_desc=str_replace('<br />', '', $article_desc);
            $article_content=str_replace('<br />', '', $article_content);
        } else {
            $errorMsg = "Vous n'avez pas le droit pour modifier cet article";
        }
    } else {
        $errorMsg = "Cet article n'existe pas ou a été supprimé";
    }
} else {
    $errorMsg = "Aucune Article n'a été trouvée";
}
