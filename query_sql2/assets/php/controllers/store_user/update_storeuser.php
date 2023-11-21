<?php

require_once('../../middleware/connect.php');

$id = $_POST['store_user-id'];
$user_alias = $_POST['store_user-alias'];
$pictures = $_POST['store_user-pictures'];
$names = $_POST['store_user-names'];
$adresss = $_POST['store_user-adress'];


$db_connect->query ("UPDATE `store_user` SET `user_alias`='$user_alias',`store_pictures`='$pictures',`store_names`='$names',`address`='$adresss' WHERE store_user.id=$id");

header("Location: http://localhost/public/query_sql2/pages/store/index.php");