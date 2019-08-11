<?php 
	include 'User.php';
	class Register extends User{
		function cardRegister() {
			echo $this->addUser('abc','sdfsdf@gmail.com','23434','382384', 'DN' );
			echo "<br>Register card";
		}
		function editUser() {
			echo "edit Student ".$this->name;
		}
	}
	$register = new Register();
	echo $register->name;
	echo "<br>";
	$name = '12312123';
	$email = 'asdasd@gmail.com';
	$password = '123124124124';
	$phone = '108301283';
	$address = 'Da Nang';
 	echo $register->addUser($name,$email, $password,$phone, $address);
 	echo "<br>";
 	$register->cardRegister();

	echo "<br>";
	$register->editUser();
 ?>
