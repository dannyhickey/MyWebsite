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