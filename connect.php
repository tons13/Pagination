<?php
$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "admin";
$dbname							= "db_php5";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>