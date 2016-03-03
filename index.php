<?php include('config/setup.php');?>

<!DOCTYPE html>
<html>
<head>	
	<title><?php echo $page_title . " | "  . $site_title; ?></title>	
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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About Me</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contact</a></li>				
				</ul>
			</div>			
		</nav><!-- END of main NAV-->
		
		<div class="container">				
			<h1>Content</h1>				
		</div>
	</div><!--END wrapper-->
	
	<footer id="footer">
		<div class="container">
			<p>insert footer here</p>				
		</div>			
	</footer>	<!--END footer-->				
</body>
	
	
</html>
