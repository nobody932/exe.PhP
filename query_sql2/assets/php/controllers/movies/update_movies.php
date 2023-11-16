<?php

require_once('../../middleware/connect.php');

$id =$_POST['movie-id'];
$title = $_POST['movie-title'];
$url = $_POST['movie-url'];
$description = $_POST['movie-description'];
$country = $_POST['movie-country'];

$db_connect->query("UPDATE movies SET title='$title', url='$url', description='$description', country='$country' WHERE movies.id = $id");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");
?>