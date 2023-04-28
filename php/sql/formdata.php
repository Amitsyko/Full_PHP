<?php
include "connect.php";
if(isset($_POST['submit']))
{
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $email=$_POST['email'];
	 $sql="INSERT INTO user(firstname,lastname,email) VALUES('$fname','$lname','$email')";
	if(mysqli_query($conn,$sql))
	{    echo "Data Inserted";
	}else{
		   echo "Data not Inserted".mysqli_error($conn);
	}

}
?>


<form method="post">
<p>
   <label> User First Name </label>
   <input type="text" name="fname">
</p>
<p>
   <label> User Last Name </label>
   <input type="text" name="lname">
</p>
<p>
   <label> User Email </label>
   <input type="text" name="email">
</p>
<input type="submit" name="submit" value="send">
</form>