<?php

function p($a)
{
	$t=-$a;
	for($b=1;$b<=sqrt($a);$b++)
	{
		if(fmod($a,$b)==0)
		{
			$t=$t+$b+($a/$b);
		}
	}
	return $t;
}

for($a=1;$a<=10000;$a++)
{

	$t=-$a;
	for($b=1;$b<=sqrt($a);$b++)
	{
		if(fmod($a,$b)==0)
		{
			$t=$t+$b+($a/$b);
		}
	}
	$test=p($t);
	if($a==$test&&$a!=$t)
	$demo+=$test;
}
echo $demo;
?>

