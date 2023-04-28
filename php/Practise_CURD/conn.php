<?php
	$servername="localhost";
	$sname="root";
	$spass="";
	$dbname="vish";
	$conn=mysqli_connect($servername,$sname,$spass,$dbname);
	if($conn){
		echo "connection is created";
	}else{
		echo"connection is not created".mysqli_connect_error($conn);
	}
	
?>