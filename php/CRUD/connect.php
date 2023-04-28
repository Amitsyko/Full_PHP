<?php
$servername="localhost";
$sname="root";
$spass="";
$dbname="dewas";
$conn=mysqli_connect($servername,$sname,$spass,$dbname);
     if($conn)
     {
		echo "connection created";
	 }
	 else{
		 echo "connection not created".mysqli_connect_error($conn);
	 }
?>