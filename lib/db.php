<?php
//connection to the database
$dbhandle = mysql_connect(HOST, DB_USER, DB_PASS)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db(DB_NAME,$dbhandle)
  or die("Could not select examples");
?>