<?php 
	include 'config/database.php';
	class BackendModel extends ConnectDB {
		function add($name, $price, $image) {

			$sql = "INSERT INTO product(name, price, image) VALUES('$name', '$price', '$image')";
			return mysqli_query($this->connect(), $sql);
			
		}
		function getProductList() {
			$sql = "SELECT * FROM product";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>