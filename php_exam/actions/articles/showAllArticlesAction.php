<?php

require('actions/connect.php'); 

// Récupérer les articles par défaut sans recherche
$getAllArticles = $mysql->query("SELECT articles.ID_User,ID_Article,Title,Description,Content,Date_Pub,Username 
FROM articles 
INNER JOIN users ON articles.ID_User=users.ID_User
ORDER BY Date_Pub DESC");
// Vérifier si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){
    // La recherche
    $usersSearch = $_GET['search'];

    // Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
    $getAllArticles = $mysql->query('SELECT articles.ID_User,ID_Article,Title,Description,Content,Date_Pub,Username
    FROM articles 
    INNER JOIN users ON articles.ID_User=users.ID_User 
    WHERE Title LIKE "%'.$usersSearch.'%" ORDER BY Date_Pub DESC');   
}