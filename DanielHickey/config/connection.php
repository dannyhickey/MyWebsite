<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'dev');
DEFINE ('DB_PASSWORD', 'ZQEGAF3h4');
DEFINE ('DB_NAME', 'danielhickey_db');


# Database Connection Here...
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect because: '.mysqli_connect_error());

?>