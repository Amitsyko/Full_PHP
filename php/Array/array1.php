<?php
//An Array stores multiple value in one single variable:-
	$a=array("amit",1,"ankit",2,"Rahul");
	//echo $a[2];
	//print_r($a);
	
	/*
	echo"<pre>";
	print_r($a);
	echo"</pre>";
	*/
	
	//echo  count($a);
	for($i=0;$i<count($a);$i++)
	{
		echo $a[$i]." ";
	}
?>