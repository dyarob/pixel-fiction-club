<?php
define('DB_SERVER', 'pixelfedyarob.mysql.db');
define('DB_USERNAME', 'pixelfedyarob');
define('DB_PASSWORD', 'lNvIZI8734');
define('DB_NAME', 'pixelfedyarob');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
