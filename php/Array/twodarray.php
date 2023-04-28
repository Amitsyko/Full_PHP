<?php
/* 
$a=[[1,2,10],[3,4,10],[5,6,40]];
echo '<pre>';
   print_r($a);
echo '</pre>';  
*/

//echo $a[0][1]." ";
//echo $a[0][1]." ";

//echo $a[1][0]." ";
//echo $a[1][1]." ";

/* 
for($i=0;$i<count($a);$i++)
{
	 for($j=0;$j<count($a[$i]);$j++)
	 { echo $a[$i][$j]." ";
	 }
	 echo "<br>";
} 
*/
$a=[[1,2,3],[3,2,1],[6,5,4]];
/*
echo'<pre>';
	print_r($a);
echo'</pre>';
*/
//echo $a[0][2];
//echo $a[2][2];

for($i=0;$i<count($a);$i++)
{
for($j=0;$j<count($a[$i]);$j++)
{
	echo $a[$i][$j]." ";
}
echo "<br>";
}
?>