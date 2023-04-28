<?php
//print_r ($_POST);
	if(isset($_POST["submit"]))
	{
		/* echo "<pre>";
		 print_r($_FILES);
		echo "</pre>"; */
		
		$fname=$_FILES["file"]["name"];
		$tmp_name=$_FILES["file"]["tmp_name"];
		$size=$_FILES["file"]["size"];
		
		$target="upload/".$fname;
		
		$ext=pathinfo($fname);
		$fext=$ext["extension"];
		
		if($fext=="jpeg" || $fext=="jpg")
		{
		
		
			if(move_uploaded_file($tmp_name,$target))
			{
				echo "your file upload succesfully";
			}else
			
			{
				echo "your file not uploaded";
			}
		}
		else
		{
			echo"only jpeg & jpg was allowed";
		}
	}



?>


<form method="post" enctype="multipart/form-data">
 <label>CHOOSE FILE :<input type="file" name="file"></label>
 <br><br>
 <input type="submit" name="submit">

</form>