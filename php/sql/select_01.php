<?php
include "connect.php";

$sql="SELECT * FROM user";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{ echo '<pre>';
  print_r($row);	
  echo '</pre>';
}
?>  