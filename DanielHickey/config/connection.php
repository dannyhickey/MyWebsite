<?php

$host = 'localhost';
$user = 'dev'; 
$password = 'ZQEGAF3h4';
$database = 'danielhickey_db';


# Database Connection Here...
$dbc = mysqli_connect($host, $user, $password, $database) OR die('Unable to connect because: '.mysqli_connect_error());// die function to kill the page if something is wrong

?>