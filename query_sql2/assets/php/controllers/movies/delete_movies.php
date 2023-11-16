<?php

require_once('../../middleware/connect.php');

$id = $_POST['movie-id'];

$db_connect->query("DELETE FROM movies WHERE movies.id=$id");

header("Location: http://localhost/public/query_sql2/pages/movies/index.php");