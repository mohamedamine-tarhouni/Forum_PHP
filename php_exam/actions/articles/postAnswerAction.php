<?php
require('actions/connect.php');
if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $inserrtAnswer = $mysql->prepare('INSERT INTO answers(id_auteur, pseudo_auteur, id_article, contenu) VALUES (?,?,?,?)');
        $inserrtAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfArticles));
    }
} 