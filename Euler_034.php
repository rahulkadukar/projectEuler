<?php
$t=-3;
for($a=0;$a<=50000;$a++)
{
	$x=str_split($a);
		for($b=0;$b<count($x);$b++)
			$s+=gmp_strval(gmp_fact($x[$b]));

		if($s==$a)
			$t+=$a;
			$s=0;
			}
echo$t;
?>