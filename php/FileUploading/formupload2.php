<?php
	echo "<pre>";
		print_r($_FILES);
	echo "</pre>";
	
	if(isset($_POST["submit"]))
	{
		$fname=$_FILES["file"]["name"];
		$tmp_name=$_FILES["file"]["tmp_name"];
		$size=$_FILES["file"]["size"];
		
		$target="upload/".time().$fname;
		$ext=pathinfo($fname);
		$fext=$ext["extension"];
		
		if($fext=="jpeg" || $fext=="pdf")
			{	
				if($size<=6000)
				{
					if(move_uploaded_file($tmp_name,$target))
					{
						echo "file uploaded";
					}else{
						echo "file not uploaded";
					}
				}else{
					echo "File can be allowed only 200mb";
				}
			}else{
				echo "only jpeg and pdf file can be allowed";
			}
	}

?>

<form method="post" enctype="multipart/form-data">
		<label>Choose File :-</label>
		<input type="file" name="file">
		<br><br>
		<input type="submit" name="submit">
</form>