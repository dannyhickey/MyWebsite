<?php
	
	// Database Connection:
	include('../../config/connection.php');
	
	// Turn off those pesky Index notices.
	error_reporting(E_ALL & ~E_NOTICE); 
	
	// Breakup the POST values into easy variables:
	$id = $_GET['id']; // Unique identifier for the record to UPDATE
	$value = $_GET['value']; // New Value
	$action = $_GET['action']; // 
	
	# Break up database info:
	$db = explode('-', $_GET['db']); // Explode the table and field name from string.
	$table = $db[0]; // Store the table name.
	$field = $db[1]; // Store the field name.

	echo '<pre>';
	print_r($_GET);
	echo '</pre>';

	if($action == 'save') {
	
		# Run a query to get the current value of the field:
		$query = "SELECT $field FROM $table WHERE id = '$id'";
		$result = mysqli_query($dbc, $query);
		
		// Store the result:
		$check = mysqli_fetch_assoc($result);
      	
		# Check the new value with the current value:
		if($check[$field] != $value) {
        
	        # Make the update:
	        $query = "UPDATE $table SET $field = '$value' WHERE id = '$id'";
	        $result = mysqli_query($dbc, $query);

			# If there is a result
	        if($result){
	        	
				// Send successful update status back:
	        	echo 1;
				
			}else{
				
				// Error Handling:
				echo mysqli_error($dbc).'<br>'.$query;
				
			}        
        
      	}else{
        
			// Send no update status back:
        	echo 3;
        
      	} // END if $check

	} // END if $action

?>