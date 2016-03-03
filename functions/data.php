<?php 
function dataPage($dbc, $id)
{
	$query = "SELECT * FROM pages WHERE id = $id";// Selecting a page from my database.
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	return $data;
}

?>