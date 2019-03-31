<?php

/*
| DATABASE CONFIG
*/
$db = array(
	'dsn'	=> '',
	'hostname' => '10.169.0.133',
	'username' => 'galeadig_sims',
	'password' => 'I8L82Day',
	'database' => 'galeadig_z1jm',
);

/*
| Define db connection
*/
$conn = mysqli_connect($db['hostname'], $db['username'], $db['password']);

if (!$conn){

    die("Database Connection Failed" . mysqli_connect_error());

}

$select_db = mysqli_select_db($conn, $db['database']);

if (!$select_db){

    die("Database Selection Failed" . mysqli_connect_error());

}


