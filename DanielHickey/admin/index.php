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
		<?php include (D_TEMPLATE . '/navigation.php');// Main Navigation ?>
		
		<h1>Admin Dashboard</h1>
		
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
				<?php
				
					$query = "SELECT * FROM pages ORDER BY title ASC";
					$result = mysqli_query($dbc, $query);
					
					while ($page_list = mysqli_fetch_assoc($result)) {
						
							$blurb = substr(strip_tags($page_list['body']), 0, 160);
						
						?>
						
						<a class="list-group-item" href="#">
							<h4 class="list-group-item-heading"><?php echo $page_list['title']; ?> </h4>
							<p class="list-group-item-text">
								<?php echo $blurb; ?> </p>
							</p>
							
						</a>
						
					<?php } ?>
				</div>
			</div>
			
			<div class="col-md-9">
				
				<form action="index.php" method="post" role="form"></form>
				<div class ="form-group">
					
					<label for="title">Title</label>
					<input class="form-control" type="text" name="title" id="title" placeholder="Page Title" />
					
				</div>
				
				<div class ="form-group">
					
					<label for="label">Label</label>
					<input class="form-control" type="text" name="label" id="label" placeholder="Page Label" />
					
				</div>
				
				<div class ="form-group">
					
					<label for="header">Header</label>
					<input class="form-control" type="text" name="header" id="header" placeholder="Page Header" />
					
				</div>
				
					<div class ="form-group">
					
					<label for="body">Body</label>
					<textarea class="form-control" name="body" id="body" rows="8" placeholder="Page Body"></textarea>
					
				</div>
				
				<button type="submit" class="btn btn-default">Save</button>
				
			</div>
			
		</div>
		
	</div><!--END wrapper-->
	
	<?php include (D_TEMPLATE . '/footer.php'); ?>
	
	<?php if ($debug == 1){ include('widgets/debug.php'); } ?>		
</body>
	
	
</html>
