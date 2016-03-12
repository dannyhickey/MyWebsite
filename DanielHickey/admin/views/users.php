<h1>User Manager</h1>

<div class="row">
	
	<div class="col-md-3">		
			
		<div class="list-group">
			
		<a class="list-group-item" href="?page=users">
			<i class="fa fa-plus"></i> New User 							
		</a>
		
		<?php
		
			$query = "SELECT * FROM users ORDER BY last ASC";
			$result = mysqli_query($dbc, $query);
			
			while ($list = mysqli_fetch_assoc($result)) {
					
					$list = data_user($dbc, $list['id']);
					// strip the tags and then limit to 160 chars
					//$blurb = substr(strip_tags($list['body']), 0, 160);
				
				?>
										
				<a class="list-group-item <?php selected($list['id'], $opened['id'], 'active'); ?>" href="index.php?page=users&id=<?php echo $list['id']; ?>">
					<h4 class="list-group-item-heading"><?php echo $list['fullname_reverse']; ?> </h4>
					<!-- <p class="list-group-item-text"><?php //echo $blurb; ?></p> -->							
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
	
						
		<form action="index.php?page=users&id=<?php  echo $opened['id']; ?>" method="post" role="form">
			
		<div class ="form-group">
			
			<label for="first">First Name:</label>
			<input class="form-control" type="text" name="first" id="first" value="<?php echo $opened['first']; ?>" placeholder="First Name">
			
		</div>
		
		<div class ="form-group">
			
			<label for="last">Last Name:</label>
			<input class="form-control" type="text" name="last" id="last" value="<?php echo $opened['last']; ?>" placeholder="Last Name">
			
		</div>
		
		<div class ="form-group">
			
			<label for="status">Status:</label>
			<select class="form-control" name="status" id="status">
				<option value="0" <?php if(isset($_GET['id'])){	selected('0', $opened['status'],	'selected'); } ?>>Inactive</option>
				<option value="1"  <?php if(isset($_GET['id'])){	selected('1', $opened['status'],	'selected'); } ?>>Active</option>
								
			</select>
			
		</div>
		
		<div class ="form-group">
			
			<label for="password">Password:</label>
			<input class="form-control" type="text" name="password" id="password" value="" placeholder="Password">
			
		</div>	
		
		<button type="submit" class="btn btn-warning">Save</button>
		<input type="hidden" name="submitted" value="1">
		<input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
		
		</form>
	</div>
	
	
	
</div>