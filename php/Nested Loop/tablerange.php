<?php
// print table from 10 to 20
/*
for($j=10;$j<=20;$j++)
{
	$n=$j;
	for($i=1;$i<=10;$i++)
	{  $t=$n*$i;
	   echo $t."<br>";
	}
	echo "<br> ";
}
*/


// print fact

for($j=2;$j<=10;$j++)
{
	$n=$j;
	$f=1;
	for($i=1;$i<=$n;$i++)
	{
		 $f=$f*$i;
	}
	echo $f."  ";
}
?>