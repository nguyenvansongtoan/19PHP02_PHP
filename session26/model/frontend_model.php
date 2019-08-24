<?php 
	include 'config/database.php';
	class FrontendModel extends ConnectDB{

		function register($username, $password, $role) {

			$checkUserExist = $this->checkUserExist($username);
			// kiem tra username da ton tai chua?
			if ($checkUserExist->num_rows == 0) {
				$sql = "INSERT INTO users(role, username, password) VALUES('$role', '$username', '$password')";
				return mysqli_query($this->connect(), $sql);
			}
			return false;
			
		}

		function login($username, $password) {

			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(), $sql);

		}

		function checkUserExist($username) {

			$sql = "SELECT * FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(), $sql);
			
		}
		function getProductList() {
			$sql = "SELECT * FROM product";
			return mysqli_query($this->connect(), $sql);
		}

		function getProductDetail($id) {
			$sql = "SELECT * FROM product WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function getUserID ($username){
			$sql = "SELECT id FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(), $sql);
		}
		function addComment($productId, $userId, $content) {
			$created = date('Y-m-d h:i:s');
			$status = 1;
			$sql = "INSERT INTO comments(product_id, user_id, content, created, status) VALUES($productId, $userId, '$content', '$created', $status)";
			//var_dump($sql);exit();
			return mysqli_query($this->connect(), $sql);
		}

		function getCommentList($product_id) {
			$sql = "SELECT * FROM comments
			INNER JOIN users ON comments.user_id = users.id 
			WHERE product_id = $product_id AND status = 1";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>