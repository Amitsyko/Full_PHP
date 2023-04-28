<?php
  $n=22;
  if($n%3==0)
  {
	   if($n%5==0)
	   { echo "No is divisible by both";
	   }else{
		    echo "Only divided by 3";
	   }
  }else{
	   	if($n%5==0)
	   { echo "Only divided by 5";
	   }else{
		   echo "No is not divisible by both";
	   }
  }

?>