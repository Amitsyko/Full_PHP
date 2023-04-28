<?php
include "connect.php";
$sql="UPDATE user SET firstname='alina',lastname='khan' WHERE id='1'";

if(mysqli_query($conn,$sql))
{
	echo "Data Has been updated";
}else{
	echo 'Daa not updated.'.mysqli_error($conn);
}



?>  