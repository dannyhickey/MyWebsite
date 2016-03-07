<?php
// Setup file:

$host = 'localhost';
$user = 'dev'; 
$password = 'ZQEGAF3h4';
$database = 'danielhickey_db';

# Database Connection Here...
$dbc = mysqli_connect($host, $user, $password, $database) OR die('Unable to connect because: '.mysqli_connect_error());// die function to kill the page if something is wrong

#Constants:
define('D_TEMPLATE', 'template');

#Functions:
include('functions/data.php');
include('functions/template.php');

#Site Setup: 
$debug = data_setting_value($dbc, 'debug_status');

$siteTitle = 'Daniel Hickey';

if(isset($_GET['page']))// if the page key exists
{
	$pageID = $_GET['page'];//assigns the value given in URL to $pageID.
}else{	
	$pageID = 1;//else assigns the value 1 to pageID to revert to home page. 
}

# page setup:
$pageArray = dataPage($dbc, $pageID);

?>