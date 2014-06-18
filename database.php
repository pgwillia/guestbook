<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase = "genericwebsite";

$connection = mysql_connect($dbHost, $dbUser, $dbPass) or die("Could not connect");
mysql_select_db($dbDatabase, $connection) or die ("Could not select db");

?>
