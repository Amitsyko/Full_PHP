<?php
include "connect.php";

$sql="CREATE DATABASE  dewas ";

if(mysqli_query($conn,$sql))
{  
   echo "DATABASE Created";
}else{
	   echo "DATABASE not created".mysqli_error($conn);
}
?>