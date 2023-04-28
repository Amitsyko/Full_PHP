<?php
if(isset($_POST["submit"]))
{
	$customer=$_POST["username"];
	$customerpass=$_POST["userpass"];
	
	setcookie("username",$customer,time()+86400*30,"/");
	setcookie("userpass",$customerpass,time()+86400*30,"/");
}
$customer=$customerpass="";
if(isset ($_COOKIE["username"]) && isset($_COOKIE["userpass"]))
{
	$customer=$_COOKIE["username"];
	$customerpass=$_COOKIE["userpass"];
}

?>
<form method="post">
	<label>Name :-</label>
	<input type="text" placeholder="Enter Name" name="username" value="<?php echo $customer ?>">
	<br><br>
	<label>Password :-</label>
	<input type="text" placeholder="Enter Pass" name="userpass" value="<?php echo $customerpass ?>">
	<br><br>
	<input type="submit" value="Login" name="submit">
	<input type="Reset" value="Reset" name="Reset">
</form>