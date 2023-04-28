
<?php
include "connect1.php";

$sql="SELECT *	 FROM  customers";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	echo '<table border="1" cellspacing="0" cellpadding="10">
	   <tr>';
           $row=mysqli_fetch_assoc($result);
			foreach($row as $key=>$v)
            {     echo '<th>'.$key.'</th>';
            }

     	  echo '</tr>';
	       $result=mysqli_query($conn,$sql);
             $i=1;
			while($row=mysqli_fetch_assoc($result))
			{   echo '</tr>';		     
			   foreach($row as $key=>$v)
               { echo '<td>'.$v.'</td>';
               }
			       echo '</tr>';
				   
				   $i++;
			}			
			
	echo '</table>';
}else{
	echo "Table is empty no record.";
}
?>  