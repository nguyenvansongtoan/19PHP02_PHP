<?php 
	$server = 'localhost'; // $server = '127.0.0.1';
	$username = 'root';
	$password = 'none'; // $password = '';
	$database = '19php02';

	$connect = mysqli_connect($server, $username, $password, $database);
	// Check connection
	if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // $sql = "INSERT INTO users(name, gender, customer_type, start_date, end_date, address, start_number, end_number) VALUES ('test name', 'male', 1, '2019-03-01', '2019-06-01', 'DN', 21, 315)";


  // mysqli_query($connect, $sql);

?>