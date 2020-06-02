<?php
include_once('includes/connect.php');
set_time_limit(0);
$database = file_get_contents('database/quran.sql');

if ($connect->multi_query($database))
{
  echo "Successfully Installed!";
}
else
{
	echo "Installation failed.";
}

?>
