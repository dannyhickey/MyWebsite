
<h1>Page Manager</h1>

<div class="row">
	
	<div class="col-md-3">		
			
		<div class="list-group">
			
		<a class="list-group-item" href="index.php">
			<i class="fa fa-plus"></i> New Page 							
		</a>
		
		<?php
		
			$query = "SELECT * FROM pages ORDER BY title ASC";
			$result = mysqli_query($dbc, $query);
			
			while ($page_list = mysqli_fetch_assoc($result)) {
					
					// strip the tags and then limit to 160 chars
					$blurb = substr(strip_tags($page_list['body']), 0, 160);
				
				?>
										
				<a class="list-group-item <?php selected($page_list['id'], $opened['id'], 'active'); ?>" href="index.php?id=<?php echo $page_list['id']; ?>">
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
	
						
		<form action="index.php?id=<?php  echo $opened['id']; ?>" method="post" role="form">
			
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
					<option value="<?php echo $user_data['id']; ?>" 
						<?php 
							// Check if opened user is selected or not
							if(isset($_GET['id']))
							{	
								selected($user_data['id'], $opened['user'],	'selected');										
							}else{
								selected($user_data['id'], $user, 'selected');
							}
							
							
							
							
							 ?>><?php echo $user_data['fullname']; ?></option>
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
			<textarea class="form-control editor" name="body" id="body" rows="8" placeholder="Page Body"><?php echo $opened['body']; ?></textarea>
			
		</div>
		
		<button type="submit" class="btn btn-warning">Save</button>
		<input type="hidden" name="submitted" value="1">
		<input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
		
		</form>
	</div>
	
	
	
</div>