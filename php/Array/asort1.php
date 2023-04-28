<?php
	$a=array("a"=>56,"c"=>23,"b"=>10,"T"=>7);
	echo"Before Sorting"."<br>";
	foreach($a as $k=>$v)
	{
		echo $k." ".$v."<br>";
	}
	
	//asort($a);	//Arrange with assending order wise:-
	//arsort($a);	//Arrange with descending order wise:-
	ksort($a);	//Arrange with Alphabatic order:-
	echo"After Sorting"."<br>";
	foreach($a as $k=>$v)
	{
		echo $k." ".$v."<br>";
	}
?>