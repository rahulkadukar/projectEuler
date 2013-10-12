<?php
for($a=1;;$a++)
{
	$x=$x.$a;
	if(strlen($x)>1000010)
	 break;
}
echo substr($x,0,1)*substr($x,9,1)*substr($x,99,1)*substr($x,999,1)*substr($x,9999,1)*substr($x,99999,1)*substr($x,999999,1);
?>