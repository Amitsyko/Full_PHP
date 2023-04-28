<?php
session_start();
include "connect.php";
//print_r($_SESSION);

if(isset($_SESSION['useremail']))
{ 	$email= $_SESSION['useremail'];

    if(isset($_POST['update']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email2=$_POST['email'];
		$password=$_POST['password'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$sql="UPDATE user SET firstname='$fname',lastname='$lname',email='$email2',city='$city',country='$country',password='$password' WHERE email='$email'";
		
		if(mysqli_query($conn,$sql))
		{  
	       echo "DATA UPDATED Successfully.";
		   $_SESSION['useremail']=$email2;
		   $_SESSION['password']=$password;
		}else{
			echo "DATA not UPDATED Successfully.".mysqli_error($conn);
		}
	}
	
	
	
	
	
	
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
	  
	  
<form method="POST">
<label>first name </label>
<input type="text" name="fname"  value="<?php echo $fname;?>">
<br><br>
<label>last name</label>
<input type="text" name="lname" value="<?php echo $lastname;?>">
<br><br>
<label>email </label>
<input type="email" name="email" value="<?php echo $email;?>"> 
<br><br>
<label>password </label>
<input type="password" name="password" value="<?php echo $password;?>">
<br><br>
<label>city </label>
<input type="city" name="city"  value="<?php echo $city;?>">
<br><br>
<label>country </label>
<input type="country" name="country"  value="<?php echo $country;?>">
<br><br>
<input type="submit" name="update" value="update">


</form>
	  
	  
	  
	  
	  
	  
	  	 
<?php	
}else{
	echo 'You are not logedin.';
}
?>