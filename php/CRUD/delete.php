
<?php
session_start();
include "connect.php";
//print_r($_SESSION);

if(isset($_SESSION['useremail']))
{
	$email= $_SESSION['useremail'];
	
	$sql="DELETE FROM user WHERE email='$email'";
	if(mysqli_query($conn,$sql))
	{
		echo"Account has been deleted";
	}else
	{
		echo"Account has Not deleted".mysqli_error($conn);
	}
	
	}else{
	echo 'You are not logedin.';
}

?>