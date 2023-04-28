 <?php
$servername="localhost";
$sname="root";
$spass="";
$dbname="demo";

$conn=mysqli_connect($servername,$sname,$spass);
	if($conn)
	{
		echo"connection created";
	}else
	{
		echo"connection not created";
	}
?>