<?php

require_once('../../middleware/connect.php');

$store_picture = $_POST['storepicture'];
$adress = $_POST['adress'];
$store_name = $_POST['description'];



$db_connect->query("INSERT INTO movies (id , title, movie, description, country) VALUES (NULL,'$title','$movie','$description','$country')");

header("Location: http://localhost/public/query_sql2");