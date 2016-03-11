<?php
// Setup file:

error_reporting(0);

# Database Connecton:
include('../config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');

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
include('config/queries.php');
$page = data_page($dbc, $pageID);

if(isset($_GET['id']))
	{		
		$opened = data_page($dbc, $_GET['id']);
	}
				 

# User Setup
$user = data_user($dbc, $_SESSION['username']);

?>