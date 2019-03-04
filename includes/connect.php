<?php
	$host = "localhost";
	$user = "ss";
	$password = "ss";
	$db = "quran";
	$con = mysqli_connect($host,$user,$password,$db) or die ("Couldn't connnect".mysql_error());
	$con->set_charset("utf8")
?>
