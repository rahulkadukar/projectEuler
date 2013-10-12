<?php
for($a=2;$a<=$_GET[n];$a++)
	for($b=2;$b<=$_GET[n];$b++)
		{
		$f= (string) gmp_strval(gmp_pow($a,$b));
		$c[$f]=1;
		}
echo count($c);
?>