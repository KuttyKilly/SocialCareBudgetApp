<?php

    $username = "name";
    $password = "pwd";
    $hostname = "mysql4.000webhost.com"; 
    $database = "db1";

    //connection to the database
    $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
    echo "Connected to MySQL<br>";

    //select a database to work with
    $selected = mysql_select_db($database, $dbhandle) 
      or die("Could not select database");

?>

