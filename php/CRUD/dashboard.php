<?php
session_start();
include "connect.php";
//print_r($_SESSION);

if(isset($_SESSION['useremail']))
{
	$email= $_SESSION['useremail'];
	$sql="SELECT * FROM user WHERE email='$email'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		 //print_r($row);
		 $fname=$row['firstname'];
		 $lastname=$row['lastname'];
		 $email=$row['email'];
		 $password=$row['password'];
		 $city=$row['city'];
		 $country=$row['country'];
	}
	  ?>
	 
	    <p>First Name : <?php echo  $fname;?> </p>
	    <p>last Name : <?php echo  $lastname;?> </p>
	    <p> password : <?php echo  $password;?> </p>
	    <p> email : <?php echo  $email;?> </p>
	    <p> city : <?php echo  $city;?> </p>
	    <p>country : <?php echo  $country;?> </p>
		<br>
		<br>
		 <p><a href="logout.php">Logout </a> </p>
		 <p><a href="delete.php">Delete </a> </p>
		 <p><a href="edit.php">Edit </a> </p>
	 
	 <?php
	
}else{
	echo 'You are not logedin.';
}
?>