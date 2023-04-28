<?php
	session_start();
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	if(isset ($_SESSION["EmployName"]))
	{
		echo $_SESSION["EmployName"];
		echo $_SESSION["EmployPass"];
	}else
	{
		echo"Session not exits";
	}
?>