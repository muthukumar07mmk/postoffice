<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$user="root";
$pwd="";
$db = substr($url["path"], 1);

$conn = new mysqli_query($server, $username, $password, $db);
?>