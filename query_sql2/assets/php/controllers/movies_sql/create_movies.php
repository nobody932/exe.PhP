<?php

require_once('../../middleware/connect.php');

$store_picture = $_POST['storepicture'];
$adress = $_POST['adress'];
$store_name = $_POST['storename'];
$description = $_POST['description'];


$db_connect->query("INSERT INTO store ( id, store_picture , adress , store_name , Description) VALUES (NULL,'$store_picture','$adress','$store_name','$description')");

header("Location: http://localhost/public/query_sql2");