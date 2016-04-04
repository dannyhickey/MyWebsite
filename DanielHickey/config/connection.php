<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'dev');
DEFINE ('DB_PASSWORD', 'ZQEGAF3h4');
DEFINE ('DB_NAME', 'danielhickey_db');


# Database Connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to the database because: '.mysqli_connect_error());

?>