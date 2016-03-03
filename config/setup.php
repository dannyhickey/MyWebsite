<?php
// Setup file:

$host = 'localhost';
$user = 'dev'; 
$password = 'ZQEGAF3h4';
$database = 'danielhickey_db';

# Database Connection Here...
$dbc = mysqli_connect($host, $user, $password, $database) OR die('Unable to connect because: '.mysqli_connect_error());// die function to kill the page if something is wrong

$siteTitle = 'Daniel Hickey';
$pageTitle = 'Home Page';

$query = "SELECT * FROM pages WHERE id = 1";// Selecting the home page from my database.
$result = mysqli_query($dbc, $query);
$pageArray = mysqli_fetch_assoc($result);

?>