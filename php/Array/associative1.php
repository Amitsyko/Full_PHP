<?php
	$a=["Name"=>"Amit","Email"=>"vishamit8833@gmail","Mobile No"=>7974743671];
	/*
	echo '<pre>';
		print_r ($a);
	echo '</pre>';
	*/
	
	//echo $a["Mobile No"];
	
	foreach($a as $k=>$v)
	{
		echo $k."-".$v."<br>";
	}
?>