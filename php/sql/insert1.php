<?php

include"connect1.php";

$sql = "INSERT INTO user(firstname,lastname,email)

VALUES('Amit','Vishwakarma','vishamit8833@gmail.com')";

if(mysqli_query($conn,$sql))
{  
   echo "Data Inserted";
}else{
	   echo "Data Not Inserted".mysqli_error($conn);
}



?>