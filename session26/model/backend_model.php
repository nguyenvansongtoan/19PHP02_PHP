<?php 
	include 'config/database.php';
	class BackendModel extends ConnectDB {
		function add($name, $price, $image) {

			$sql = "INSERT INTO product(name, price, image, ) VALUES('$name', '$price', '$image', )";
			return mysqli_query($this->connect(), $sql);
				
		}
		function getProductList() {
			$sql = "SELECT * FROM product";
			return mysqli_query($this->connect(), $sql);
		}
		function getCommentList() {
			$sql = "SELECT comments.id,
			comments.content,
			comments.created,
			comments.product_id,
			comments.status,
			product.name,
			product.id as product_id
			FROM comments
			INNER JOIN product ON product.id = comments.product_id";
			return mysqli_query($this->connect(), $sql);
		}

		function approveComment($id) {
			$sql = "UPDATE comments SET status = 0 WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>