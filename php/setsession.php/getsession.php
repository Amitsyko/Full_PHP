
<?php
session_start();

print_r($_SESSION);
if(isset($_SESSION['username']))
{
	echo $_SESSION['username'].' ';
	echo $_SESSION['userpass'].' ';
}else{
	echo 'sesion not exist.';
}



?>