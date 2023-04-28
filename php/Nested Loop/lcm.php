<?php
// find lcm

$a=9;
$b=3;
$big=($a>$b)?$a:$b;
while(1)
{
	 if($big%$a==0 && $big%$b==0)
	 { $lcm=$big;
        break;
	 }
	$big++;
}
   echo $lcm;



// hcf 
$a=5;
$b=25;

$small=($a<$b)?$a:$b;

$i=1;

while($i<=$small)
{
	 if($a%$i==0  && $b%$i==0)
	 {
		   $hcf=$i;
	 }
	$i++;
}

echo $hcf;

?>