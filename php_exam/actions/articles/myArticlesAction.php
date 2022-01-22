<?php

require('actions/connect.php');

$getAllMyArticles = $mysql->prepare('SELECT * FROM articles WHERE ID_User = ? ORDER BY Date_Pub DESC');
$getAllArticles->execute(array($_SESSION['id']));
// // Vérifier si une recherche a été rentrée par l'utilisateur
// if(isset($_GET['search']) AND !empty($_GET['search'])){
//     // La recherche
//     $usersSearch = $_GET['search'];
//     // Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
//     $getAllArticles = $mysql->query('SELECT * FROM articles 
//     WHERE Title LIKE "%'.$usersSearch.'%" ORDER BY Date_Pub DESC');    
// }