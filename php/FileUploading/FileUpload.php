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
		
		$target="upload/".time().$fname;
		
		$ext=pathinfo($fname);
		$fext=$ext["extension"];
		
		
		if($fext=="jpeg" || $fext=="jpg")
		{
			if($size<=200000)
			{
			if(move_uploaded_file($tmp_name,$target))
			{
				echo"File Upload SuccessFully";
			}else
			{
				echo"File Not Uploaded";
			}
			}else
			{
				echo"Your File must be greater than current file size is".$size;
			}
		}else 
		{
			echo "only JPG JPEG & PNG file allowed";
		}
	}

?>

<form method="post" enctype="multipart/form-data">
	<label>FileName :</label>
	<input type="file"  name="file">
	<br><br>
	<input type="submit" name="submit">
</form>