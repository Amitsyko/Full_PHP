<?php
 include "connect1.php";
 
 
 // sql to create table
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
 
if(mysqli_query($conn,$sql))
{  
   echo "table Created";
}else{
	   echo "table not created".mysqli_error($conn);
}
?>