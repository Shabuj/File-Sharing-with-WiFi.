<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "file_share";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>