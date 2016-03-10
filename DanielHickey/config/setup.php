<?php
// Setup file:

# Database Connecton:
include('config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');

#Functions:
include('functions/data.php');
include('functions/template.php');

#Site Setup: 
$debug = data_setting_value($dbc, 'debug_status');

$site_title = 'Daniel Hickey';

if(isset($_GET['page']))// if the page key exists
{
	$pageID = $_GET['page'];//assigns the value given in URL to $pageID.
}else{	
	$pageID = 'home';//else assigns the value 'home' to pageID to revert to home page. 
}

# page setup:
$page = data_page($dbc, $pageID);

?>