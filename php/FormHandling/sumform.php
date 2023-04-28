<?php
//print_r($_POST);

if(isset($_POST['submit']))
{
 $no1=$_POST['no1'];
 $no2=$_POST['no2'];
 echo $no1+$no2;
}

?>


<form method="post">
   <p>
      <label> Enter no 1 </label>
	  <input type="text" placeholder="Enter Name" name="no1">
   </p>
   <p>
      <label> Enter no 2 </label>
	  <input type="text" placeholder="Enter Name" name="no2">
   </p>
<input type="submit"  name="submit" value="login" >
</form>