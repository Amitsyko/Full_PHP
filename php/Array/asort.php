 <?php
 $a=array("a"=>25,"b"=>54,"f"=>78,"G"=>4);
 
 echo "Before sorting <br>";
 foreach($a as $k=>$v)
 { 	 echo $k." ".$v."<br>";
 }
 
 //sort ($a);
 //asort($a);
 //arsort($a);
 //ksort($a);
 krsort($a);
 
  echo "Before sorting <br>";
 foreach($a as $k=>$v)
 { 	 echo $k." ".$v."<br>";
 }
 
 
 ?>