<?php 
	include 'config/database.php';
	class Model extends ConnectDB {

		function addUser($username, $password) {
			$sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";
			return mysqli_query($this->connect(), $sql);
		}

		function getListUser() {
			$sql = "SELECT * FROM users";
			return mysqli_query($this->connect(), $sql);
		}

		function deleteUser($id) {
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function getUserById($id) {
			$sql = "SELECT * FROM users WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function editUser($id, $username) {
			$sql = "UPDATE users SET username = '$username' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>