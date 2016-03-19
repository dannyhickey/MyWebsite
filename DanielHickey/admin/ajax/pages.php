<?php 

	include('../../config/connection.php');
	
	$id = $_GET['id'];
	
	$query = "DELETE FROM pages WHERE id = $id";
	$result = mysqli_query($dbc, $query);
	
		if($result) {
			echo 'Page Deleted';
		} else {
			
			echo 'There was an error...<br>';
			echo $q.'<br>';
			echo mysqli_error($dbc);
			
		}


 ?>