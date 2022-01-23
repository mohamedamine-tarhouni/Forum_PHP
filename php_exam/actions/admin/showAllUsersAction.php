<?php

require('actions/connect.php'); 

// Récupérer les Utilisateurs par défaut sans recherche
$getAllUsers = $mysql->query("SELECT * FROM users");
