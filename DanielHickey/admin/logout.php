<?php

#Start Session:

session_start();

unset($_SESSION['username']); // Delete the username key

//can also use session_destroy(); to delete all session keys.

header('location: login.php'); // Redirect to login.php
	
?>