<?php

require_once('../../middleware/connect.php');


$user_alias = $_POST['store_user-alias'];
$pictures = $_POST['store_user-pictures'];
$names = $_POST['store_user-names'];
$adresss = $_POST['store_user-adress'];


$db_connect->query("INSERT INTO store_user ( id , user_alias, store_pictures, store_names, address) VALUES (NULL,'$user_alias','$pictures','$names','$adresss')");

header("Location: http://localhost/public/query_sql2/pages/store/index.php");