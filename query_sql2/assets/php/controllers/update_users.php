<?php 

require_once('../middleware/connect.php');

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$alias = $_POST['alias'];

$db_connect->query("UPDATE user SET id=$id, email='$email', password='$password', alias='$alias' WHERE 1");

header("Location: http://localhost/public/query_sql");
