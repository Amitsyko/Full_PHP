<?php
$a=10;

//$a++;  //increament  opt  // increase value by 1 
//$a--;   // decreament opt // decrease value by 1  

//$t=$a++;   // post increament opt // first copy value then increase by 
//$t=++$a;   // pre increament opt // first  increase value by 1 then copy 

$t=$a--;  // post decreament opt // first copy value then decrease 
//$t=--$a;  // pre decreament opt // first copy value then decrease 

echo $a.' '.$t; 
?>