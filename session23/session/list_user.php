<?php 
	session_start();
	echo $_SESSION['login']['username'].'<br>';
	echo $_SESSION['login']['email'].'<br>';
	echo $_SESSION['login']['phone'];
?>