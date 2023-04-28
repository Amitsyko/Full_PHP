<?php
	/*
	$a=4;
	$b=22;
	$big=($a>$b)?$a:$b;
	while(1){
		if($big%$a==0 && $big%$b==0){
			$lcm=$big;
			break;
		}
		$big++;
	}
	echo $lcm;
	*/
	
	// lcm
	/*
	$a=5;
	$b=3;
	$big=($a>$b)?$a:$b;
	while(1){
		if($big%$a==0 && $big%$b==0){
			$lcm=$big;
			break;
		}
		$big++;
	}echo$big;
	*/
	
	//HCF :-
	/*
	$a=3;
	$b=12;
	$small=($a<$b)?$a:$b;
	$i=1;
	while($i<=$small){
		if($a%$i==0 && $b%$i==0){
			$hcf=$i;
		}$i++;
	}echo$hcf;
	
	*/
	$a=6;
	$b=12;
	$small=($a<$b)?$a:$b;
	$i=1;
	while($i<$small){
		if($a%$i==0 && $b%$i==0){
			$hcf=$i;
		}
		$i++;
	}echo$hcf;
?>