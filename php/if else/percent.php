<?php
	$per=59;
	//Percentage Grading
	if($per>=80){
		echo"A grade";
	}else{
		if($per>=60){
		echo"B grade";
		}else{
			if($per>=40){
			echo"c grade";
			}else{
				echo"Fail!";
			}
		}
	}
?>