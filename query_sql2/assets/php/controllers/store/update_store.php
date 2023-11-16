<?php

require_once('../../middleware/connect.php');

$id =$_POST['store-id'];
$picture = $_POST['store-picture'];
$name = $_POST['store-name'];
$adress = $_POST['store-adress'];
$description = $_POST['store-description'];

$db_connect->query("UPDATE store SET store_picture='$picture', adress='$adress', description='$description', store_name='$name' WHERE store.id = $id");

header("Location: http://localhost/public/query_sql2/pages/store/index.php");
?>