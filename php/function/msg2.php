<?php

/*
	function msg()
	{
		echo"Hello Amit"."<br>";
	}
	msg();
	msg();
	msg();
*/

//without parameter:-
/*
	function sum()
	{
		$a=45;
		$b=12;
		echo $a+$b."<br>";
	}
	sum();
	sum();
	sum();
*/

//with parameters:-

	function sum($a,$b)
	{
		$c=$a+$b;
		echo $c."<br>";
	}
	sum(3,3);
	sum(9,1);
	sum(25,24);
?>