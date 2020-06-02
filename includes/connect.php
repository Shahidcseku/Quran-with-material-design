<?php
	// Heroku production
	$host = getenv('db_host');
	$user = getenv('db_user');
	$password = getenv('db_password');
	$db = getenv('db_name');

	// Local 

	// $host = "localhost";
	// $user = "root";
	// $password = "";
	// $db = "quran";

	$con = mysqli_connect($host,$user,$password,$db) or die ("Couldn't connnect".mysql_error());
	$connect = new mysqli($host,$user,$password,$db);
	$con->set_charset("utf8")
?>
