<?php 
	session_start();
	$username = "sdc";

	$_SESSION['login']['username'] = $username;
	$_SESSION['login']['email'] = 'apple.lunog1905@gmail.com';
	$_SESSION['login']['phone'] = '0988794607';


	echo $_SESSION['login']['username'];
?>