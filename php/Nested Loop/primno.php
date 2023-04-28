<?php
	for($j=1;$j<=100;$j++)
{
	$n=$j;
	$check=0;
	for($i=2;$i<=$n/2;$i++){
		if($n%$i==0){
			$check=1;
			break;
		}
	}
	
	if($check==0){
		echo"<br>  Prime No".$n;
	}else{
		echo"<br> Not Prime No".$n;
	}
}
?>