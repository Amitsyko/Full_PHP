<?php

	include"connect1.php";
	
	if(isset($_POST["submit"]))
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["email"];
		$sql="INSERT INTO user(firstname,lastname,email) VALUES('$fname','$lname','$email')";
		if(mysqli_query($conn,$sql))
		{
			
			echo'<script>alert("Data Inserted")</script>';
		}
		else
			
		{
			echo'<script>alert("Data Not Inserted")</script>'.mysqli_error($conn);
		}
	}

?>

<form method="post">
	<label>User First Name :-</label>
	<input type="text" name="fname">
	<br><br>
	<label>User Last Name :-</label>
	<input type="text" name="lname">
	<br><br>
	<label>User Email :-</label>
	<input type="text" name="email">
	<br><br>
	<input type="submit" name="submit" value="Login">
	
</form>