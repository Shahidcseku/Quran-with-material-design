<?php
	// Heroku production
	$host = getenv('db_host');
	$user = getenv('db_user');
	$password = getenv('db_password');
	$db = getenv('db_name');

	$host = "ec2-34-202-88-122.compute-1.amazonaws.com";
	$user = "pkquzhrohjzlvf";
	$password = "d7a5e0641db7b8c6d39d461135e90df8f4db638c44656a0e6e12748b9acf0cff";
	$db = "d2l7tudouu3orq";

	// Local 

	// $host = "localhost";
	// $user = "root";
	// $password = "";
	// $db = "quran";

	$con = mysqli_connect($host,$user,$password,$db) or die ("Couldn't connnect".mysql_error());
	$connect = new mysqli($host,$user,$password,$db);
	$con->set_charset("utf8")
?>
