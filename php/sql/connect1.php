<?php
$servername="localhost";
$susername="root";
$spass="";
$dbname="demo";

$conn=mysqli_connect ($servername,$susername,$spass,$dbname);

if($conn)
{
	//echo 'connection created';
}else{
	echo 'connection not created'. mysqli_connect_error($conn);
}



?>