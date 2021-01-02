<?php
$mysql_hostname = "sql107.epizy.com";
$mysql_user = "epiz_27598123";
$mysql_password = "warMO1SXSnZ2";
$mysql_database = "epiz_27598123_hms";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>