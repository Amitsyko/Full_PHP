<?php
	$per=30;
	if($per>=80){
		echo"A grade";
	}else{
		if($per>=60){
			echo"B grade";
		}else{
			if($per>=40){
				echo"C grade";
			}else{
				if($per>=33){
					echo"D grade";
				}else{
					echo"Fail!";
				}
			}
		}
	}
?>