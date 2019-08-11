<?php 
	include 'oop.php';
	$user = new User ();
	echo $user -> username;
	echo "<br>";
 	$username = 'bbb';
 	$password = '123456';
 	echo $user -> addUser($username, $password);
 ?>