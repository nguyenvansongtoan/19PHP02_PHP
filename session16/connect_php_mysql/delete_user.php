<?php 
	require_once 'connect.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id";

	mysqli_query($connect, $sql);
	// Chuyen trang
	header("Location: list_user.php");
?>