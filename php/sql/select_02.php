<?php
	include"connect1.php";

	$sql="SELECT * FROM user";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		echo'<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>S.No</th>
			<th>CustomerName</th>
			<th>ContactName</th>
			<th>Address</th>
			<th>City</th>
			<th>PostalCode</th>
			<th>Country</th>
		</tr>';
		
	
	
	$i=1;
	while($row=mysqli_fetch_assoc($result))
	{
		echo'<tr>
			<td>'.$i.'</td>
			<td>'.$row["CustomerName"].'</td>
			<td>'.$row["ContactName"].'</td>
			<td>'.$row["Address"].'</td>
			<td>'.$row["City"].'</td>
			<td>'.$row["PostalCode"].'</td>
			<td>'.$row["Country"].'</td>
		</tr>';
		$i++;
		
	}
	echo'</table>';
}
	else
	{
		echo"Tabel is Empty No Records";
	}
?>