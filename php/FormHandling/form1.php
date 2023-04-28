<?php
// print_r($_POST);

 if(isset($_POST['submit']))
 {
	echo $_POST['username']." <br>";
	echo $_POST['userpass']." <br>";
 }
?>
<form method="post">
<p>
  <label>user name</label>
  <input type="text" placeholder="Entername" name="username"></input><br>
</p>
<p>
  <label>user pass</label>
  <input type="text" placeholder="Enterpass"name="userpass"></input><br>
  </p>
  <input type="submit" name="submit" value="Login"></input>
</form>