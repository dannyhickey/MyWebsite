<?php
// Setup file:

error_reporting(0);

# Database Connecton:
include('config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');

#Functions:
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

#Site Setup: 
$debug = data_setting_value($dbc, 'debug_status');

$path = get_path(); 

$site_title = 'Daniel Hickey';

if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '')// if the page key exists
{
	//$path['call_parts'][0] = 'home'; //Sets $path['call_parts'][0] to equal the value given in URL
	header('Location: home');
}

# page setup:
$page = data_page($dbc, $path['call_parts'][0]); 

?>