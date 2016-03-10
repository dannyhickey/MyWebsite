<?php 

# Start Session:
session_start();

# Database Connecton:
include ('../config/connection.php');

if($_POST)
{
	$query = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
	$result = mysqli_query($dbc, $query);
	
	
	if(mysqli_num_rows($result) == 1)
	{
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>	
	<title>Admin Login</title>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<?php
		include ('config/css.php');
	?>
	<?php
		include ('config/js.php');
	?>
			
</head>
<body>
	<div id="wrap">
		<?php //include(D_TEMPLATE . '/navigation.php');// Main Navigation ?>
	<div class="container">		
		
		
		<div class="row">
			
			<div class="col-md-4  col-md-offset-4">
				
				<div class="panel panel-info">
					
					<div class="panel-heading">
						
						<strong>Login</strong>
						
					</div><!-- End Panel Heading -->
					
						<div class="panel-body">
							
							<form action="login.php" method="post" role="form">
						
							  <div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
							  </div>
							  
							  <div class="form-group">
							    <label for="password">Password</label>
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							  </div>
							  <!--		  
							  <div class="checkbox">
							    <label>
							      <input type="checkbox"> Check me out
							    </label>
							  </div>
							  -->
							  
							  <button type="submit" class="btn btn-default">Submit</button>
							  
							</form>
						</div><!-- End Panel Body -->
				
				</div><!--End Panel-->
				
				
			</div><!--End column-->
					
		</div><!--End row -->
		
		
	</div><!--End Container-->
	
	</div><!--END wrapper-->
	
	
	<?php //include (D_TEMPLATE . '/footer.php'); ?>
	
	<?php //if ($debug == 1){ include('widgets/debug.php'); } ?>		
</body>
	
	
</html>
