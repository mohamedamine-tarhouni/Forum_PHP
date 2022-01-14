<?php
require ('actions/connect.php');
if (isset($_POST['submit'])){
    if(!empty($_POST['title']) AND !empty($_POST['description'])){
        $article_title=htmlspecialchars($_POST['title']);
        $article_desc=nl2br(htmlspecialchars($_POST['description']));
        $article_date=date('d/m/Y H:i');
        $article_id_author= $_SESSION['ID_User'];
        $article_authorname=$_SESSION['Username'];
    }else{
        $errorMsg="Veuillez compléter tous les champs";
    }
}


?>