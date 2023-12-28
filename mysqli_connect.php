<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','Rahul123');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','flight_db');

$dbc=mysqli_connect("localhost","root","Rahul123","flight")
OR die('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
