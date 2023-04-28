<?php
	function tab($n)
	{
		for($i=1;$i<=10;$i++)
		{
			$t=$n*$i;
			echo $n."*".$i."=".$n*$i."<br>";
		}		
	}
	
	tab(2);
	echo"<br>";
	tab(4);
	echo"<br>";
	tab(6);
	echo"<br>";
	tab(8);
?>