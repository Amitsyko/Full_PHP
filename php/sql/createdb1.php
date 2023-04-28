<?php
	include"connect1.php";
	
	$sql="CREATE DATABASE demo";
	
	if(mysqli_query($conn,$sql))
	{
		echo "DATABASE Created";
	}else{
		echo "DATABASE Not Created". mysqli_error($conn);
	}
?>