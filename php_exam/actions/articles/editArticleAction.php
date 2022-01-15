<?php

require ('actions/connect.php');
if(isset($_POST['submit'])){
    if(!empty($_POST['title']) AND !empty($_POST['description'])AND !empty($_POST['content'])){
        $article_title=htmlspecialchars($_POST['title']);
        $article_desc=nl2br(htmlspecialchars($_POST['description']));
        $article_content=nl2br(htmlspecialchars($_POST['content']));
        $edit_article=$mysql->prepare('UPDATE articles SET Title= ?, Description= ?, Content= ? WHERE ID_Article=?');
        $edit_article->execute(array($article_title,$article_desc,$article_content,$idOfArticles));
        header('Location: publish-article.php');
    }else{
        $errorMsg="Veuillez compléter tous les champs";
    }
}