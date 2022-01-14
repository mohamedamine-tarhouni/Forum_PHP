<?php
session_start();
$mysql = new PDO('mysql:host=localhost;dbname=php_exam_db;charset=utf8;', 'root', ''); // connection to database "php_exam_db"
// $mysqli = new mysqli("localhost", "root", "", "php_exam_db"); // connection to database "php_exam_db"
