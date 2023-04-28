<?php
session_start();
include "connect.php";
//print_r($_SESSION);

if(isset($_SESSION['useremail']) && $_SESSION['userrole']=='admin')
{
  $useremail=$_GET['useremail'];
  
  $sql="DELETE FROM user WHERE email='$useremail'";

   if(mysqli_query($conn,$sql))
   {  echo "Account delete of user";
   }else{
        echo "Account delete of user".mysqli_error($conn);
   }
	
}else{
	echo 'You are not logedin.';
}
?>
