<?php
session_start();

//print_r($_SESSION);
 if(isset($_SESSION["tabname"]))
 {
	 echo $_SESSION["tabname"]."<br>";
	 echo $_SESSION["tabpass"];
 }else{
	 echo "session has been exit";
 }
?>