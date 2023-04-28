<?php
	/*
	for($i=2000;$i<=2050;$i++){
		if($i%4==0){
			echo$i." ";
		}
	}*/
	$n=12;
	$check=0;
	
	for($i=2;$i<=$n/2;$i++){
		if($n%$i==0){
			$check=1;
			break;
		}
	}
	if($check==0){
		echo"Prime";
	}else{
		echo"Not Prime";
	}
?>