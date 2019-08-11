<?php include 'controller/controller.php';?>
<h1>Welcome to my website</h1>
<a href="index.php">Home</a>
| <a href="index.php?action=news">News</a>
| <a href="index.php?action=product">Product</a>
| <a href="index.php?action=user">User</a>
<?php 
	$controller = new Controller();
	$controller->handleRequest();
?>