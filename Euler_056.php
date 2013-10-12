<?php
for($a=1;$a<100;$a++)
	for($b=1;$b<100;$b++)
		{
			$x = str_split(gmp_strval(gmp_pow($a,$b)));
			for($z=0;$z<count($x);$z++)
				$c+=$x[$z];
			if($c>$t)
				$t=$c;
			unset($x);
			$c=0;
		}
echo $t;		
?>