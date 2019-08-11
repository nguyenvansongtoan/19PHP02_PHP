<?php 
	include 'oop.php';
	class Student extends User {

		function cardStudent() {
			echo $this->addUser('abc','123');
			echo "<br>Student card";
		}
		function editUser() {
			echo "edit Student ".$this->username;
		}

	}

	$student = new Student();

	echo $student->username;

	echo "<br>";
	$student->cardStudent();
	echo "<br>";
	$username = 'b234234234bb';
	$password = '1234sdfasdammm56';
	echo $student->addUser($username, $password);

	echo "<br>";
	$student->cardStudent();

	echo "<br>";
	$student->editUser();
?>