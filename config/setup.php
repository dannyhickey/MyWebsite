<?php
// Setup file:

$host = 'localhost';
$user = 'dev'; 
$password = 'ZQEGAF3h4';
$database = 'danielhickey_db';

# Database Connection Here...
$dbc = mysqli_connect($host, $user, $password, $database) OR die('Unable to connect because: '.mysqli_connect_error());// die function to kill the page if something is wrong

$siteTitle = 'Daniel Hickey';

if(isset($_GET['page']))// if the page key exists
{
	$pageID = $_GET['page'];//assigns the value given in URL to $pageID.
}else{	
	$pageID = 1;//else assigns the value 1 to pageID to revert to home page. 
}

# page setup
$query = "SELECT * FROM pages WHERE id = $pageID";// Selecting a page from my database.
$result = mysqli_query($dbc, $query);
$pageArray = mysqli_fetch_assoc($result);

?>