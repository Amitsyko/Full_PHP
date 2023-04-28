<?php
 //print_r ($_POST);

if(isset($_POST['submit']))
{
	echo $_POST['username']."<br>";
	echo $_POST['useremail']."<br>";
	echo $_POST['userpass']."<br>";
	echo $_POST['dateofbirth']."<br>";
	echo $_POST['number']."<br>";
	echo $_POST['gender']."<br>";
	echo implode (",",$_POST['sub'])."<br>";
	echo $_POST['msg']."<br>";
	echo $_POST['book']."<br>";
}

?>

<form method="post">

 <label>USER NAME</label>
 <input type="text" placeholder="username" name="username">
 <br><br>
 <label>USER EMAIL</label>
 <input type="text" placeholder="email" name="useremail"><br>
 <br><br>
 <label>USER PASS</label>
 <input type="password" placeholder="userpass" name="userpass"><br>
 <br><br>
 <label>DATE OF BIRTH</label>
 <input type="date" placeholder="dateofbirth" name="dateofbirth">
 <br><br>
 <label>MO. NUMBER</label>
 <input type="text" placeholder="Mo Number" name="number"><br>
 <br><br>
 <h2>SELECT YOUR GENDER</h2>
 <input type="radio" name="gender" value="male">MALE
 <input type="radio" name="gender" value="female">FEMALE
 <br><br>
 <h2>SELECT YOUR SUBJECT</h2>
 <input type="checkbox" name="sub[]" value="html">HTML
 <br>
 <input type="checkbox" name="sub[]" value="html">CSS
 <br>
 <input type="checkbox" name="sub[]" value="html">JAVASCRIPT
 <br>
 <input type="checkbox" name="sub[]" value="html">PHP 
 <br><br>
 <label>MESSAGE</label>
 <br><br>
 <textarea type="Message" placeholder="Enter Here" cols="30" rows="10" name="msg"></textarea>
 <select name="book">
  <option>SELECT</option>
  <option>PASSBOOK</option>
  <option>BANKBOOK</option>
  <option>POSTBOOK</option>
 </select>
 <br><br>
 <input type="submit" value="login" name="submit">


</form>