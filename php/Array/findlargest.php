<?php

	$a=[40,50,1007,24,400];
	$largest=$a[0];  
	for($i=0;$i<count($a);$i++)
	{
		 if($largest>$a[$i])
		 { $largest=$a[$i];
		 }
	}
	echo $largest;

?>