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
		
		<h1>Admin Dashboard</h1>
		
		<div class="row">
			
			<div class="col-md-3">
				
				<div class="list-group">
					
				<?php 
				
				if(isset($_POST['submitted']) == 1)
				{
				
				$title = mysqli_real_escape_string($dbc, $_POST['title']);
				$label = mysqli_real_escape_string($dbc, $_POST['label']);
				$header = mysqli_real_escape_string($dbc, $_POST['header']);
				$body = mysqli_real_escape_string($dbc, $_POST['body']);
				
				
					$query = "INSERT INTO pages (user, slug, title, label, header, body) VALUES ($_POST[user], '$_POST[slug]', '$title', '$label', '$header', '$body')";
					$result = mysqli_query($dbc, $query);
					
					if($result)
					{
						$message = '<p>Page was added</p>';
					}else{
						$message = '<p>Page could not be added due to: '.mysqli_error($dbc);
						$message .= '<p>'.$query.'</p>';
					}
				} ?>
					
					
				<?php
				
					$query = "SELECT * FROM pages ORDER BY title ASC";
					$result = mysqli_query($dbc, $query);
					
					while ($page_list = mysqli_fetch_assoc($result)) {
							
							// strip the tags and then limit to 160 chars
							$blurb = substr(strip_tags($page_list['body']), 0, 160);
						
						?>
						
						<a class="list-group-item" href="index.php?id=<?php echo $page_list['id']; ?>">
							<h4 class="list-group-item-heading"><?php echo $page_list['title']; ?> </h4>
							<p class="list-group-item-text"><?php echo $blurb; ?></p>							
						</a>
						
					<?php } ?>
					
				</div> <!-- End of list-group -->
				
			</div>  <!-- End of col-md-3 -->
			
			<div class="col-md-9">
				
				<?php 
				
					if(isset($message))
					{
						echo $message;
					}
				
				 ?>
				 
				 <?php 
				 
				 	if(isset($_GET['id']))
					{
						$query = "SELECT * FROM pages WHERE id = $_GET[id]";
						$result = mysqli_query($dbc, $query);
						
						$opened = mysqli_fetch_assoc($result);
					}
				 
				  ?>
				
								
				<form action="index.php" method="post" role="form">
					
				<div class ="form-group">
					
					<label for="title">Title:</label>
					<input class="form-control" type="text" name="title" id="title" value="<?php echo $opened['title']; ?>" placeholder="Page Title">
					
				</div>
				
				<div class ="form-group">
					
					<label for="user">User:</label>
					<select class="form-control" name="user" id="user">
						<option value="0">No user</option>
						<?php 
						
						$query = "SELECT id FROM users ORDER BY first ASC";
						$result = mysqli_query($dbc, $query);						
					
						while($user_list = mysqli_fetch_assoc($result))
						{ 							
							$user_data = data_user($dbc, $user_list['id']);							
							?>														
							<option value = "<?php echo $user_data['id']; ?>"><?php echo $user_data['fullname']; ?></option>
						<?php } ?>
						
					</select>
					
				</div>
				
				<div class ="form-group">
					
					<label for="label">Slug:</label>
					<input class="form-control" type="text" name="slug" id="slug" value="<?php echo $opened['slug']; ?>" placeholder="Page Slug">
					
				</div>
				
				<div class ="form-group">
					
					<label for="label">Label:</label>
					<input class="form-control" type="text" name="label" id="label" value="<?php echo $opened['label']; ?>" placeholder="Page Label">
					
				</div>
				
				<div class ="form-group">
					
					<label for="header">Header:</label>
					<input class="form-control" type="text" name="header" id="header" value="<?php echo $opened['header']; ?>" placeholder="Page Header">
					
				</div>
				
				<div class ="form-group">
					
					<label for="body">Body:</label>
					<textarea class="form-control" name="body" id="body" rows="8" placeholder="Page Body"><?php echo $opened['body']; ?></textarea>
					
				</div>
				
				<button type="submit" class="btn btn-warning">Save</button>
				<input type="hidden" name="submitted" value="1">
				
				</form>
			</div>
			
			
			
		</div>
		
	</div><!--END wrapper-->
	
	<?php include (D_TEMPLATE . '/footer.php'); ?>
	
	<?php if ($debug == 1){ include('widgets/debug.php'); } ?>		
</body>
	
	
</html>
