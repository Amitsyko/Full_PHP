<?php
	if(isset($_POST['submit']))
	{
		$admin=$_POST['useradmin'];
		$adminpass=$_POST['adminpass'];
		
		setcookie("useradmin",$admin,time()+86400*30,'/');
		setcookie("adminpass",$adminpass,time()+86400*30,'/');
	}

$admin=$adminpass="";
if(isset($_COOKIE['useradmin'])	&& isset($_COOKIE['adminpass']))
{
	$admin=$_COOKIE['useradmin'];
	$adminpass=$_COOKIE['adminpass'];
}
?>

<form method="post">
<p>
	<label>Name</label>
	<input type="text"  name="useradmin" value="<?php echo $admin;?>">
</p>
<p>
	<label>Password</label>
	<input type="text"  name="adminpass" value="<?php echo $adminpass;?>">
</p>
	<input type="submit" value="Login" name="submit">
</form>