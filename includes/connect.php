<?php
	$host = getenv('db_host');
	$user = getenv('db_user');
	$password = getenv('db_password');
	$db = getenv('db_name');
	$con = mysqli_connect($host,$user,$password,$db) or die ("Couldn't connnect".mysql_error());
	$con->set_charset("utf8")
?>
