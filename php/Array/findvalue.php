<?php
$a=[40,50,100,20,400];
$f=100;
$check=0;

for($i=0;$i<count($a);$i++)
{
	 if($f==$a[$i])
	 { $check=1;
        break;
	 }
}

if($check==1)
{ echo "Found";
}else{
	 echo "not Found";
}

?>