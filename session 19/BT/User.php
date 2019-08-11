<?php 
	class User{
		public $name;
		public $email;
		public $password;
		public $phone;
		public $address;
		function addUser($name, $email, $password, $phone, $address){
			return "Add user: $name - $email -$password -$phone - $address";
		}
		function editUser(){
			echo "Edit user".$this->name;
		}
		function registerUser(){
			echo "Register user";
		}
		function loginUser(){
			echo "Login user";
		}
		function viewUser(){
			echo "View user";
		}
		function listUser(){
			echo "List user";
		}
	}
 ?>