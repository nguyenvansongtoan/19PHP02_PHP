<?php 
	class User {
		// thuoc tinh 
		// public, protected, private
		public $username = '19PHP02';
		public $password;
		// phuong thuc
		function addUser($username,$password){
			return "Add user abc $username - $password";
		}
		function editUser(){
			echo "Edit user" .$this -> username;
		}
		function detailUser() {
			$a = 5 + 6;
			return $a;
		}
	}

?>