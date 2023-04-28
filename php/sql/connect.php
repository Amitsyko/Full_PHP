<?php
$servername="localhost";
$susername="root";
$spass="";
$dbname="dewas";

$conn=mysqli_connect($servername,$susername,$spass,$dbname);
 
if($conn)
{ // echo 'Connection created.';
}else{
	  echo 'Connection not created.'.mysqli_connect_error($conn);
}
?>