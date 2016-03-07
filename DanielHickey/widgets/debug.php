	<div id="console_debug">
			
			<?php
				
				$all_variables = get_defined_vars();			
			?>	
			<?php //print_r($all_variables); will print all the variables ?>
			<h1>GET</h1>
			<pre>
				<?php print_r($_GET);?>
			</pre>
			
			<h1>GET</h1>
			<pre>
				<?php print_r($_POST);?>
			</pre>
			
			<h1>Page Array</h1>
			<pre>
				<?php print_r($pageArray);?>
			</pre>	
		
