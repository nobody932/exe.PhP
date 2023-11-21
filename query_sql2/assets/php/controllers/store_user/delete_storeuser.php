<?php

require_once('../../middleware/connect.php');

$id = $_POST['store_user-id'];


$db_connect->query ("DELETE FROM `store_user` WHERE store_user.id=$id");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");