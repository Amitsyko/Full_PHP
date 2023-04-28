<?php
	session_start();
	$_SESSION['username']="admin";
	$_SESSION['userpass']="admin@123";
	print_r($_SESSION);
?>