<?php 
	include 'oop.php'
	class Student extends User{

	}
	$student = new Student();
	echo $student->username;
	echo "<br>";
	$username = '12312123';
	$password = '123124124124';
 	echo $student->addUser($username, $password);
 	echo "<br>";

 ?>