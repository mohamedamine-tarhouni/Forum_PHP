<?php

require('actions/connect.php');

$getAllAnswersOfThisArticle = $mysql->prepare('SELECT id_auteur, pseudo_auteur, id_article, contenu FROM answers WHERE id_article = ? ORDER BY id DESC');
$getAllAnswersOfThisArticle->execute(array($idOfArticles));