<?php
	// Heroku production
	$url = parse_url(getenv("DATABASE_URL"));
	$host = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);
	// Local 

	// $host = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "quran";

	$con = mysqli_connect($host,$username,$password,$db) or die ("Couldn't connnect".mysqli_connect_error());
	$connect = new mysqli($host,$username,$password,$db);
	$con->set_charset("utf8")
?>
