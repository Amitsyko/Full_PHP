<?php
//a+($n-1)*$d;
/*
$a=3;
$d=2;
for($i=1;$i<=10;$i++)
{	$term=$a+($i-1)*$d;
	echo $term." ";
}
*/

// print power a to the power 

$a=4; //this is power
$b=3;
$p=1;

for($i=1;$i<=$b;$i++)
{
	 $p=$p*$a; // 1.4=4 // 4.4=16 //16.4=64 
}
echo $p;

?>