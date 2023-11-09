<?php

require_once('../../middleware/connect.php');

$title = $_POST['title'];
$movie = $_POST['movie'];
$description = $_POST['description'];
$country = $_POST['country'];


$db_connect->query("INSERT INTO movies (id , title, movie, description, country) VALUES (NULL,'$title','$movie','$description','$country')");

header("Location: http://localhost/public/query_sql2");