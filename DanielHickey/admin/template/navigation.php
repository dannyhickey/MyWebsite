<nav class="navbar navbar-default" role="navigation">
	
			<?php if($debug == 1){?> 		 
			<button id="btn_debug" class="btn btn-warning"><i class="fa fa-bug"></i></button>
			<?php } ?>
			
				
				<ul class="nav navbar-nav">
					<?php nav_name($dbc, $pageID); ?>
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Users</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="logout.php">Logout</a></li>
									
				</ul>
						
</nav><!-- END of main NAV-->