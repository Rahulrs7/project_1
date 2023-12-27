<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','rahul123');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','flight');

$dbc=mysqli_connect("localhost","root","rahul123","flight")
OR die('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
