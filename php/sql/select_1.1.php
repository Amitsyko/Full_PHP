<?php
	include"connect1.php";
	$sql="SELECT * FROM Customers
ORDER BY Country";
	
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<pre>";
			print_r($row);
		echo"</pre>";
	}
	
?>