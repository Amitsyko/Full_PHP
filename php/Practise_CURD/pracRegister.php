<?php
	include_once"conn.php";
	print_r($_POST);
	if(isset($_POST["submit"]))
	{
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$city=$_POST["city"];
		
		//$sql="SELECT * FROM amit WHERE email='$email'";
		//$result=mysqli_query($conn,$sql);
		
			
		$sql="INSERT INTO amit(Firstname,Lastname,email,password,city) 
		VALUES('$firstname','$lastname','$email','$pass','$city')";
		
			if(mysqli_query($conn,$sql))
			{
				echo "Data is inserted";
			}else{
				echo "Data is not inserted".mysqli_error($conn);
			}
		
	}
	
?>
<form method="POST">
	<label>First Name</label>
	<input type="text" name="firstname">
	<br>
	<br>
	<label>Last Name</label>
	<input type="text" name="lastname">
	<br>
	<br>
	<label>Email</label>
	<input type="text" name="email">
	<br>
	<br>
	<label>Password</label>
	<input type="text" name="pass">
	<br>
	<br>
	<label>City</label>
	<input type="text" name="city">
	<br>
	<br>
	<input type="submit" name="submit" value="submit">
</form>