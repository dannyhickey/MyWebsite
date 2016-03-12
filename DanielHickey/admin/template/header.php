<?php

# Start the session
session_start();

if(!isset($_SESSION['username']))
{
	header('Location: login.php');
}

?>


<?php include('config/setup.php');?>

<!DOCTYPE html>
<html>
<head>	
	<title><?php echo $page['title'] . " | "  . $siteTitle; ?></title>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<?php include('config/css.php');?>
	<?php include('config/js.php');?>
			
</head>
<body>
	<div id="wrap">
		<?php include (D_TEMPLATE . '/navigation.php');// Main Navigation ?>