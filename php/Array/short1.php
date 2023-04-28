<?php
	/*
	$a=[50,80,100,20,10];
	echo 'Before Sorting'.'<br>';
	for($i=0;$i<count($a);$i++)
	{
		echo $a[$i].' ';
	}
	
	
	sort ($a);
	echo '<br>'."After Sorting".'<br>';
	for($i=0;$i<count($a);$i++)
	{
		echo $a[$i].' ';
	} 
	*/
	
	$a=[34,65,64,67,43,35];
	echo "before sorting"."<br>";
	for ($i=0;$i<count($a);$i++)
	{
		echo $a[$i]." ";
	}
	
	sort ($a);
	echo "<br>"."after sorting"."<br>";  //Arrange systomatic :-
	for ($i=0;$i<count($a);$i++)
	{
		echo $a[$i]." ";
	}
?>