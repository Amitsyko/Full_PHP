<?php

function tab($n)
{
	 for($i=1;$i<=10;$i++)
	 {
		 $t=$n*$i;
		 echo $n."x".$i."=> ".$n*$i."<br>";
	 }
}

tab(12);
tab(15);
tab(32);
?>