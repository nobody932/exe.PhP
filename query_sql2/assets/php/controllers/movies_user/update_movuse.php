<?php

require_once('../../middleware/connect.php');

$id = $_POST['movie-id'];
$titles = $_POST['movie-title'];
$url = $_POST['movie-url'];
$user_aliass=$_POST['user_alias'];
$description = $_POST['movie-description'];
$country = $_POST['movie-country'];


$db_connect->query("UPDATE movies_user SET movies_title='$titles', movies_url='$urls', user_alias='$user_aliass' WHERE movies_user.id=$id");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");