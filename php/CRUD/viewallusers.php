<?php
session_start();
include "connect.php";
//print_r($_SESSION);

if(isset($_SESSION['useremail']) && $_SESSION['userrole']=='admin')
{

$sql="SELECT * FROM user WHERE userrole='user'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	echo  '<table border="1" cellspacing="0" cellpadding="10">
	     <tr>
		     <th>S.no </th>
		     <th> Name </th>
		     <th>Email</th>
		     <th>edit</th>
		     <th>Delete</th>
		 </tr>';
		 $i=1;
		 while($row=mysqli_fetch_assoc($result))
		 {
			 echo '<tr>
			         <td>'.$i.'</td>
			         <td>'.$row['firstname'].'</td>
			         <td>'.$row['email'].'</td>
			         <td><a href="user-edit.php?useremail='.$row['email'].'">edit </a></td>
			         <td><a href="user-delete.php?useremail='.$row['email'].'">delete</a> </a></td>
			     </tr>';
		 }
		 
   $i++;
	
	
	;
}else{
	echo "Noo users found.";
}

	
}else{
	echo 'You are not logedin.';
}
?>
