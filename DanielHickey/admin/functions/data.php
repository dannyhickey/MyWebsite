<?php 
function data_setting_value($dbc, $id)
{
	$query = "SELECT * FROM settings WHERE id = '$id'";
	$result = mysqli_query($dbc, $query);

	$dataArray = mysqli_fetch_assoc($result);
	
	return $dataArray['value'];
}

function data_user($dbc, $id)
{
	$query = "SELECT * FROM users WHERE email = '$id'";
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	$data['fullname'] = $data['first']. ' ' . $data['last'];
	
	$data['fullname_reverse'] = $data['last']. ', ' . $data['first'];
	
	return $data;
	
}

function dataPage($dbc, $id)
{
	$query = "SELECT * FROM pages WHERE id = $id";// Selecting a page from my database.
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	$data['body_nohtml'] = strip_tags($data['body']);
	
	
	if($data['body'] == $data['body_nohtml'])
	{
		$data['body_formatted'] = '<p>' . $data['body'] . '</p>';
	
	}else{		
		
		$data['body_formatted'] = $data['body'];
	}
	
	return $data;
}

?>