<nav class="navbar navbar-default" role="navigation">
	
			<?php if($debug == 1){?> 		 
			<button id="btn_debug" class="btn btn-warning"><i class="fa fa-bug"></i></button>
			<?php } ?>
			
			
			<div class="container">
				
				<ul class="nav navbar-nav">
					
					<?php nav_name($dbc, $pageID); ?>
					
					<li><a href="index.php?page=3">FAQ</a></li>
					<li><a href="index.php?page=4">Contact</a></li>				
				</ul>
				
			</div>			
</nav><!-- END of main NAV-->