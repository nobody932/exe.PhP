<?php

require_once('../../middleware/connect.php');

$id=$_POST['movies_user-id'];


$db_connect->query ("DELETE FROM `movies_user` WHERE movies_user.id=$id");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");