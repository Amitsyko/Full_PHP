<?php
	//print_r($_POST);
	if(isset ($_POST['submit']))
	{
		$No1= $_POST['No1'];
		$No2=$_POST['No2'];
		echo $No1+$No2;
	}
	
?>
	<form method="post">
		<label>Enter No 1 :-</label>
		<input type="text" placeholder="Number" name="No1"></input>
		<br><br>
		<label>Enter No 2 :-</label>
		<input type="text" placeholder="Number" name="No2"></input>
		<br><br>
		<input type="submit" value="Login" name="submit"></input>
	</form>