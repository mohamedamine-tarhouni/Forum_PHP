<?php
require ('actions/connect.php');
if (isset($_POST['submit'])){
    if(!empty($_POST['title']) AND !empty($_POST['description'])){
        $article_title=htmlspecialchars($_POST['title']);
        $article_desc=nl2br(htmlspecialchars($_POST['description']));
        $article_content=nl2br(htmlspecialchars($_POST['content']));
        $article_date=date('d/m/Y à H:i');
        $article_id_author= $_SESSION['ID_User'];
        $req_Add_Article = $mysql->prepare('INSERT INTO articles(Title,Description,Date_Pub,ID_User,Content) VALUES(?, ?, ?, ?, ?)');
        $req_Add_Article->execute(array($article_title, $article_desc, $article_date,$article_id_author,$article_content));
    }else{
        $errorMsg="Veuillez compléter tous les champs";
    }
}
