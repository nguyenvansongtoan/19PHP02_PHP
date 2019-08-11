<?php 
	include 'config/database.php';
	class Model extends ConnectDB{
		function addUser ($username, $password){
			$sql = "INSERT INTO user(username,password) VALUES ('$username', '$password')";
			return mysqli_query($this->connect(), $sql);
		}
		function getListUser() {
			$sql = "SELECT * FROM user";
			return mysqli_query($this->connect(), $sql);
		}
		function deleteUser($id) {
			$sql = "DELETE FROM user WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function getUserById($id) {
			$sql = "SELECT * FROM user WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function editUser($id, $username) {
			$sql = "UPDATE user SET username = '$username' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function checkLogin ($username, $password){
			$sql = "SELECT * FROM user WHERE username= '$username' and password = '$password'";
			return mysql_query($this->connect(), $sql);
		}
	}
 ?>