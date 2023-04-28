<?php
/* $a=array(12,3,5,35,6,79);
$sum=0;
*/
//$i=0; 

//using While loop:-

/*
while($i<6)
{
	$sum=$sum+$a[$i];  //0+12=12 //12+3=15 //15+5=20 //20+35=55
	
	$i++;
}
echo $sum;
*/


//using For loop:-

$a=array(12,3,5,35,6,79);
$sum=0;
for($i=0;$i<6;$i++)
{
	$sum=$sum+$a[$i];
}echo $sum;


/*
$a=array(12,3,5,35,6,79);
$sum=0;

$i=0;

//using Do while loop:-
do{
	$sum=$sum+$a[$i];
	$i++;
	
}
while($i<6);
	echo $sum;
*/
?>