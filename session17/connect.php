<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = '19php02';

	$connect = mysqli_connect($server, $username, $password, $database);
	mysqli_set_charset($connect,"utf8");
	if (mysqli_connect_errno())
	  {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
  ?>