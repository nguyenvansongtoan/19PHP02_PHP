<h1>Website</h1>
<a href="index.php?action=home">Home</a>
 | <a href="index.php?action=news">News</a>
 | <a href="index.php?action=product">Product</a>
 | <a href="index.php?action=contact">Contact</a>
<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();

?>