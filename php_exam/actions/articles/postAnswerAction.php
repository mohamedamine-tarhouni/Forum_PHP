<?php
require('actions/connect.php');
if(isset($_POST['validate'])){
    if(!empty($_POST['answer'])){
        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $inserrtAnswer = $mysql->prepare('INSERT INTO answers(ID_User, ID_Article, Content) VALUES (?,?,?)');
        $inserrtAnswer->execute(array($_SESSION['ID_User'], $idOfArticles,$user_answer));
    }
} 