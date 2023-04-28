<?php
$a=[[1,2,10],[3,4,10],[5,6,40]];
/* 
echo '<pre>';
   print_r($a);
echo '</pre>'; 
*/

//echo $a[0][1]." ";
//echo $a[0][1]." ";

//echo $a[1][0]." ";
//echo $a[1][1]." ";


//Using for loop:-

/*
 for($i=0;$i<3;$i++)
{
	 for($j=0;$j<3;$j++)
	 { echo $a[$i][$j]." ";
	 }
	 echo "<br>";
} 
*/


//Using while loop:-
/* 
$i=0;
while($i<3)
{

	$j=0;
	while($j<3)
	{
		echo $a[$i][$j]." ";
		$j++;
		
	}
	echo"<br>";
$i++;
} 
*/

//Using do while loop:-
$i=0;
do
{
	 $j=0;
	 do{
		 echo $a[$i][$j]." ";
		 $j++;
	 }while($j<3);
	 
	 echo '<br>';
	
$i++;	
}
while($i<3)


?>