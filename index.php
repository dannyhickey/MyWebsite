<?php include('config/setup.php');?>

<!DOCTYPE html>
<html>
<head>	
	<title><?php echo $pageArray['title'] . " | "  . $siteTitle; ?></title>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<?php include('config/css.php');?>
	<?php include('config/js.php');?>
			
</head>
<body>
	<div id="wrap">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<ul class="nav navbar-nav">
					<li<?php if($pageID == 1){ echo ' class="active"'; } ?>><a href="?page=1">Home</a></li>
					<li<?php if($pageID == 2){ echo ' class="active"'; } ?>><a href="?page=2">About Me</a></li>
					<li><a href="index.php?page=3">FAQ</a></li>
					<li><a href="index.php?page=4">Contact</a></li>				
				</ul>
			</div>			
		</nav><!-- END of main NAV-->
		
		<div class="container">				
			<h1>
				<?php 
					echo $pageArray['header']; //associative array to the "header" column.
					
				
				?>
			</h1>
			
			<p><?php echo $pageArray['body'];//associative array to the "header" column.?></p>
							
		</div>
	</div><!--END wrapper-->
	
	<footer id="footer">
		<div class="container">
			<p>insert footer here</p>				
		</div>			
	</footer>	<!--END footer-->				
</body>
	
	
</html>
