<?php

require_once('../../middleware/connect.php');

$id =$_POST['id'];
$store_picture = $_POST['storepicture'];
$adress = $_POST['adress'];
$store_name = $_POST['storename'];
$description = $_POST['description'];

$db_connect->query("UPDATE store SET store_picture='$store_picture', adress='$adress', store_name='$store_name',Description='$description' WHERE store.id = $id");

header("Location: http://localhost/public/query_sql2");
?>