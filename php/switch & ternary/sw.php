<?php
	$n='c';
	$i=4;
	switch($n){
		case 'a':
			echo"A is a true value";
			break;
		case 'b':
			echo"b is a true value";
			break;
		case 'c':
			if($i%2==0){
				echo"Even";
			}else{
				echo"odd";
			}
			break;
		default:
			echo"Invalid Option";
	}
?>