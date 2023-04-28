<?php
echo"<pre>";
print_r($_COOKIE);
echo"</pre>";
if(isset($_COOKIE['username']) && isset($_COOKIE['userpass']))
{
	echo $_COOKIE['username'].' ';
	echo $_COOKIE['userpass'].' ';
}else{
	echo "Cookies is not exist.";
}

?>