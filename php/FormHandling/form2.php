<?php
	//print_r($_POST);

	if(isset ($_POST['submit']))
	{
		echo $_POST['username']."<br>";
		echo $_POST['userpass']."<br>";
		echo $_POST['xyz']."<br>";
		echo $_POST['Gender']."<br>";
		echo implode(",",$_POST['sub'])."<br>";
		echo $_POST['msg']."<br>";
		echo $_POST['vehicle']."<br>";
	}
	
?>

<form method="post">
	<label>User Name :</label>
	<input type="text" name="username" placeholder="Enter Name">
	<br><br>
	<label>User Pass :</label>
	<input type="text" name="userpass" placeholder="Enter Pass">
	<br><br>
	<label>Mobile No :</label>
	<input type="text" placeholder="Mobile" name="xyz">
	<br><br>
	<h2>Select Your Gender :-</h2>
	<input type="radio" name="Gender" value="male" >Male
	<input type="radio" name="Gender" value="female">Female
	
	<br>
	<p>
	   <label> subject </label>
	   <input type="checkbox" name="sub[]" value="html">HTML
	   <input type="checkbox" name="sub[]" value="CSS">CSS
	   <input type="checkbox" name="sub[]" value="PHP">PHP
	   <input type="checkbox" name="sub[]" value="Java">Java
	   <input type="checkbox" name="sub[]" value="Python">Python
	</p> 
    
	<label><b>Send Your Message Here:</b></label>
	<br>
	<textarea type="Message" placeholder="Enter  Your Name" rows="5"

	cols="20" name="msg"></textarea>
	<select name="vehicle">
		<option value="car">car</option>
		<option value="bike">bike</option>
		<option value="cycle">cycle</option>
	</select>
	<br><br>
	<input type="submit" name="submit"></input>
</form>