<?php

require_once('../../middleware/connect.php');

$title = $_POST['movie-title'];
$url = $_POST['movie-url'];
$description = $_POST['movie-description'];
$country = $_POST['movie-country'];


$db_connect->query("INSERT INTO movies ( id, title, url, description, country) VALUES (NULL, '$title', '$url', '$description', '$country')");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");