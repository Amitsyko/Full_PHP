<?php
session_start();
include "connect.php";
if(isset($_POST["submit"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)==1)
   { 
	  while($row=mysqli_fetch_assoc($result))
	  {
		  $userrole=$row['userrole'];
	  }
	//die
      $_SESSION['useremail']=$email;
      $_SESSION['password']=$password;
	  $_SESSION['userrole']=$userrole;
	  
	  if($userrole=='admin')
	  {
			header("Location: admin-dashboard.php");

	  }else
	  {
			header("Location: dashboard.php");
	  }
   }else{
	   echo 'Email and password not match.';
   }

}

?>
<h1> Login fist </h1>
<FORM method="POST">
<lable>email </lable>
<input type="email" name="email">
<br><br>
<lable>password </lable>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit">
<button><a href='register.php'> register first </a></button>
</form>