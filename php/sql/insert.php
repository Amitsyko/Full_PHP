<?php
include "connect.php";


$sql = "INSERT INTO user(firstname,lastname,email) VALUES('mohit','shah','raj@gmail.com')";

if(mysqli_query($conn,$sql))
{  
   echo "Data Inserted";
}else
{
	   echo "Data not Inserted".mysqli_error($conn);
}
?>