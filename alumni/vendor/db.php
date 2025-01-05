<?php
#database connection
#database name:kdu


$host = "localhost";
$database = "almuni";
$user = "root";
$pass = "";

#establish connection:
$link = mysqli_connect($host, $user, $pass, $database) or die("Connection error");
mysqli_select_db($link, $database);

?>