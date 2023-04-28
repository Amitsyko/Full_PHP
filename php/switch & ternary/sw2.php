<?php
	$n='a';
	$x=11;
	$y=20;
    switch($n)
	{
	 case 1: $z=$x+$y;
	      echo "The sum is .$z";
		  break;
	case 2:
	      $z=$x-$y;
	      echo "The sub is .$z";
		  break;
	case 3:
	       $z=$x*$y;
	      echo "The multiply is .$z";
		  break;
	case 4:
	         if($x%2==0)
			 { echo "Even";
			 }else{
				 echo "odd";
			 }
		  break;
	case 'a':
	      echo "a is true.";
		  break;
	case 'b':
	      echo "b is true.";
		  break;
	case 'c':
	      echo "c is true.";
		  break;
	default:
	   echo "Invalid option";
	}
?>