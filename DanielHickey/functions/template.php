<?php

function nav_main($dbc, $pageID)
{
	$query = "SELECT * FROM pages";
	$result = mysqli_query($dbc, $query);
	
	while ($nav = mysqli_fetch_assoc($result)) {?>
		
		<li<?php if($pageID == $nav['slug']){ echo ' class="active"'; } ?>><a href="?page=<?php echo $nav['slug'];?>"><?php echo $nav['label'];?></a></li>
		<?php }			
}

?>