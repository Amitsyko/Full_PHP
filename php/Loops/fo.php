<?php

	$n=2;
	$check=0;
	for($i=1;$i<=$n/2;$i++){
		if($n%$i==0){
			$check=1;
			break;
		}
	}
	if($check=0){
		echo"Prime";
	}else{
		echo"Not Prime";
	}

/*
	$n=12;
	$n=12;
	$check=1;
	for($i=1;$i<=$n/2;$i++){
		if($n%$i==0){
			$check=0;
			break;
		}
	}
	if($check=0){
		echo"Prime";
	}else{
		echo"Not Prime";
	}
	*/
?>