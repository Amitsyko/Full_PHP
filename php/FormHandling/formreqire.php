<?php
$namerror='';
$emailerror='';

	if(isset($_POST['submit']))
	{
		echo $_POST['username']."<br>";		
		$name=$_POST['username'];
		if(empty($name))
		{
			$namerror="*This field is must required";
		}
		echo $_POST['useremail']."<br>";		
		$useremail=$_POST['useremail'];
		if(empty($useremail))
		{
			$emailerror="*This field is must required";
		}
	}
	
	
?>

<form method="post">
		<p>
		<label>Name :</label>
		<input type="text" placeholder="Enter Name" name="username">
		<span> <?php  echo $namerror; ?></span>
		<br><br>
		<label>Email :</label>
		<input type="text" placeholder="Enter email" name="useremail">
		<span> <?php  echo $emailerror; ?></span>
		<br><br>
		<label>Password :</label>
		<input type="password" placeholder="Enter Password" name="userpass">
		
		
		<h2>Select your Gender :-</h2>
		<input type="radio" name="Gender" value="male">Male
		<input type="radio" name="Gender" value="female">Female
		
		<h2>Please Fill the Coloumns:-</h2>
		<input type="checkbox" name="sub[]" value="Html">Html
		<br>
		<input type="checkbox" name="sub[]" value="CSS">CSS
		<br>
		<input type="checkbox" name="sub[]" value="Javascript">Javascript
		<br>
		<input type="checkbox" name="sub[]" value="PHP">PHP
		
		<h2>Send your Quries:-</h2>
		<label>Message:-</label>
		<br><br>
		<textarea type="message" placeholder="Enter here" name="msg"cols="25" rows="10"></textarea>
		<select name="vehicles">
			<option value="Railways">Railways</option>
			<option value="Airline">Airline</option>
			<option value="Cruse">Cruse</option>
		</select>
		<br><br>
		<input type="submit" value="Login" name="submit">
		
		
	</form>