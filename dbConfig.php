<?php
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$server = $url["host"];
	$user = $url["root"];
	$pwd = $url[""];
	$db = substr($url["path"], 1);
	$conn=new mysqli($server,$user,$pwd,$db);;
?>