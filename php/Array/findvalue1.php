<?php
	$a=[40,350,35,65,35];
	$f=30;
	$check=0;
	
	for($i=0;$i<count($a);$i++)
	{
		if($f==$a[$i])
		{
			$check=1;
			break;
		}
	}
	if($check==1)
	{
		echo "found";
	}else{
		echo "not found";
	}
?>