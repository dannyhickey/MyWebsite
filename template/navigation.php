<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php
					
						$query = "SELECT * FROM pages";
						$result = mysqli_query($dbc, $query);
						
						while ($nav = mysqli_fetch_assoc($result)) {
							//echo '<li><a href="?page=' . $nav['id']. '">' . $nav['title'] . '</a></li>';
					?>
					
					<li<?php if($pageID == $nav['id']){ echo ' class="active"'; } ?>><a href="?page=<?php echo $nav['id'];?>"><?php echo $nav['label'];?></a></li>
					
					<?php } ?>
					<li><a href="index.php?page=3">FAQ</a></li>
					<li><a href="index.php?page=4">Contact</a></li>				
				</ul>
			</div>			
</nav><!-- END of main NAV-->