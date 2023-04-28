<?php
	$n=1;
	$x=4;
	$y=6;
	
	switch($n)
	{
	case 1:$z=$x+$y;
		echo"The sum is $z";
		break;
	case 2:$z=$x-$y;
		echo"The sub is $z";
		break;
	case 3:$z=$x*$y;
		echo"The multiplication is $z";
		break;
	case 4:
		if($y%3==0){
			echo"Even";
		}else{
			echo"odd";
		}
		break;
	}
?>