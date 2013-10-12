<?php
for($a=1;;$a++)
{
	for($b=1;$b<10;$b++)
		{
			$n = gmp_strval(gmp_pow($b,$a));
			if(strlen($n)==$a)
			{
				$c++;$f=X;
			}
		}
	if($f!=X)
	{echo $c;exit;}
	$f=A;
}
?>