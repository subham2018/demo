<?php

// database

if($_SERVER['HTTP_HOST'] == "localhost")
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sts";


}



$link = @mysql_connect($dbhost, $dbuser, $dbpass) or die("Could not connect to the host because " . mysql_error()); 
$db = @mysql_select_db($dbname, $link) or die("Could not select the database because " . mysql_error()); 


$page = basename($_SERVER['PHP_SELF']);
$prefix = "soinit_";

date_default_timezone_set('Asia/Kolkata');

?>
