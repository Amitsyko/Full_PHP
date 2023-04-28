<?php
if(isset($_POST['submit']))
{ 
	$name=$_POST['username'];
	$userpass=$_POST['userpass'];
		
	setcookie("username",$name,time()+86400*30,'/');
	setcookie("userpass",$userpass,time()+86400*30,'/');
}

	$name=$pass='';
	if(isset($_COOKIE['username']) && isset($_COOKIE['userpass']))
	{
		$name=$_COOKIE['username'];
		$pass=$_COOKIE['userpass'];
}

?>
<form method="post">
<p>
  <label> USer name </label>
  <input type="text" name="username" value="<?php echo $name;?>">
</p>
<p>
  <label> USer Password </label>
  <input type="text" name="userpass" value="<?php echo $pass;?>">
</p>
<input type="submit" name="submit">
</form>