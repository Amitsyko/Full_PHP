<?php
include "connect.php";
$sql="DELETE FROM user  WHERE id='2'";

if(mysqli_query($conn,$sql))
{
	echo "Data Has been deleted";
}else{
	echo 'Daa not deleted.'.mysqli_error($conn);
}
?>  