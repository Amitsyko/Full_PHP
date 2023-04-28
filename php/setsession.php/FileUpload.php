<?php
//print_r($_POST);
	if(isset($_POST["submit"]))
{

	echo"<pre>";
		print_r($_FILES);
	echo"</pre>"; 


	$fname=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$size=$_FILES["file"]["size"];
	
	
	
}

?>

<form method="post" enctype="multipart/form-data">
	<label>FileName :</label>
	<input type="file" placeholder="Choose files" name="file">
	<br><br>
	<input type="submit" name="submit" value="submit">
</form>