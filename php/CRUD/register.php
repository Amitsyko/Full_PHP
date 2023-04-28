<?php
//print_r($_POST);
include_once "connect.php";
if(isset($_POST["submit"]))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$city=$_POST["city"];
	$country=$_POST["country"];
	
	$sql="SELECT * FROM user WHERE email='$email'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==0)
	{
	
		$sql="INSERT INTO user(firstname,lastname,email,password,city,country) VALUES('$fname','$lname','$email','$password','$city','$country')";

		
		if(mysqli_query($conn,$sql))
		{	echo "DATA inserted"; 
		}
		else{
			  echo "DATA not inserted".mysqli_error($conn);
		
		}
	}else{
		echo 'Email already registered. use another.';
	}
}
?>
<form method="POST">
<label>first name </label>
<input type="text" name="fname">
<br><br>
<label>last name</label>
<input type="text" name="lname">
<br><br>
<label>email </label>
<input type="email" name="email">
<br><br>
<label>password </label>
<input type="password" name="password">
<br><br>
<label>city </label>
<input type="city" name="city">
<br><br>
<label>country </label>
<input type="country" name="country">
<br><br>
<input type="submit" name="submit" value="submit">
<button><a href='login.php'>login</a></button>
</form> 