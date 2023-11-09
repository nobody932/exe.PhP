<?php

require_once('../../middleware/connect.php');

$id =$_POST['id'];
$title =$_POST['title'];
$movie =$_POST['movie'];
$description =$_POST['description'];
$country =$_POST['country'];

$db_connect->query("UPDATE movies SET title='$title', movie='$movie', description='$description', country='$country' WHERE movies.id = $id");

header("Location: http://localhost/public/query_sql2");
?>