<?php

require('actions/connect.php');

$getAllAnswersOfThisArticle = $mysql->prepare('SELECT answers.Content,answers.Date_Pub
,answers.ID_Article,Username FROM answers 
INNER JOIN users ON answers.ID_User = users.ID_User
INNER JOIN articles ON answers.ID_Article = articles.ID_Article
WHERE answers.ID_Article= ? ORDER BY Date_Pub DESC');
$getAllAnswersOfThisArticle->execute(array($idOfArticles));