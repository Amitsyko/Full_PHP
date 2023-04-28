<?php
	$n=9;
	if($n%3==0){
		if($n%5==0){
			echo"no its divided by both";
		}else{
			echo"only divided with 3";
		}
	}else{
		if($n%5==0){
			echo"only divded by 5";
		}else{
			echo"no its divided by both";
		}
	}
?>