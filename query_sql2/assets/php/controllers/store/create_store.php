<?php

require_once('../../middleware/connect.php');

$picture = $_POST['store-picture'];
$adress = $_POST['store-adress'];
$name = $_POST['store-name'];
$description = $_POST['store-description'];


$db_connect->query("INSERT INTO store (id , store_picture, adress, store_name, description) VALUES (NULL, '$picture', '$adress', '$name', '$description')");

header("Location: http://localhost/public/query_sql2/pages/store/index.php");