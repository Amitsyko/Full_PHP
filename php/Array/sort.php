<?php
$a=[40,50,1007,24,400];
 echo "Before sorting <br>";
for($i=0;$i<count($a);$i++)
{ echo $a[$i]." ";

}

//sort($a);
rsort($a);
 echo "<br>After sorting <br>";
for($i=0;$i<count($a);$i++)
{ echo $a[$i]." ";

} 

?>