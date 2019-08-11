<?php 
	class ConnectDB{
		private $server ='localhost';
		private $username = 'root';
		private $password = '';
		private $database = '19php02_advand_mvc_oop';
		protected function connect() {
			$connect = mysqli_connect($this->server,$this->username,$this->password,$this->database);
			// Change character set to utf8
			mysqli_set_charset($connect,"utf8");
			// Check connection
			if (mysqli_connect_errno())
		  {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  return $connect;
		}
	}
 ?>