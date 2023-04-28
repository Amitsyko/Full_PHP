<?php
  $per=33;
  
  if($per>=80)
  {
    echo "A Grade ";
  }else{
      if($per>=60)
	  { echo "B Grade";
	  }else{
	      if($per>=40)
		  {  echo "C Grade";
		  }else{
		      if($per>=33)
			  {  echo "D Grade";
			  }else{
			     echo "F Grade";
			  }
		  }
	  }
  }


?>