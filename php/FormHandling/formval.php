<?php
$namerror='';
$passerror='';
	if(isset($_POST['submit']))
	{
		$name= $_POST['username'];
		if(empty($name))
		{  $namerror='This filed is required.';
		}
		$userpass= $_POST['userpass'];
		if(empty($userpass))
		{  $passerror='This filed is required.';
		}
	}
	
?>

<form method="post">
<p>
	<label>User Name :</label>
	<input type="text" name="username" placeholder="Enter Name">
	<span> <?php  echo $namerror; ?></span>
</p>
<p>
	<label>User password :</label>
	<input type="text" name="userpass" placeholder="Enter password">
	<span> <?php  echo $passerror; ?></span>
</p>


	<input type="submit" name="submit"></input>
</form>