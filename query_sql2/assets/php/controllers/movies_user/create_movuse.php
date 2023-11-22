<?php

require_once('../../middleware/connect.php');

$id= $_POST['movies_user-id'];
$user_aliass = $_POST['store_user-alias'];
$titles = $_POST['movie_user-title'];
$urls = $_POST['movie_user-url'];



$db_connect->query("UPDATE movies_user SET movies_title ='$titles', movies_url ='$urls', user_alias ='$user_aliass' WHERE movies_user.id=$id");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");