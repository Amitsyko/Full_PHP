<?php
//print_r($_POST);

if(isset($_POST['submit']))
{
	echo $_POST['username']." <br>";
	echo $_POST['userpass']." <br>";
}

?>


<form method="post">
   <p>
      <label> User Name </label>
	  <input type="text" placeholder="Enter Name" name="username">
   </p>
   <p>
      <label> User pass </label>
	  <input type="text" placeholder="Enter Name" name="userpass">
   </p>
    
   
<input type="submit"  name="submit" value="login" >
</form>