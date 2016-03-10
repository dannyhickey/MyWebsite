<?php 
function data_setting_value($dbc, $id)
{
	$query = "SELECT * FROM settings WHERE id = '$id'";
	$result = mysqli_query($dbc, $query);

	$data = mysqli_fetch_assoc($result);
	
	return $data['value'];
}

function data_user($dbc, $id)
{
	//if $id is a number 
	if (is_numeric($id))	
	{
		$cond = "WHERE id = '$id'";// locate from id column and assign to $cond
	}else{
		$cond = "WHERE email = '$id'";// locate from email column and assign to $cond
	}
	
	$query = "SELECT * FROM users $cond";
	
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	$data['fullname'] = $data['first']. ' ' . $data['last'];	
	$data['fullname_reverse'] = $data['last']. ', ' . $data['first'];
	
	return $data;
	
}

function data_page($dbc, $id)
{
	$query = "SELECT * FROM pages WHERE id = $id";// Selecting a page from my database.
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	$data['body_nohtml'] = strip_tags($data['body']);// strips out html tags if any exist. 
	
	
	//if statement to ensure that body_formatted gets a value
	
	if($data['body'] == $data['body_nohtml']) //if body has no html
	{
		$data['body_formatted'] = '<p>' . $data['body'] . '</p>';
	
	}else{		
		
		$data['body_formatted'] = $data['body'];
	}
	
	return $data;
}

?>