<?php

function is_prime($a)
	{			
		for($x=3;$x<=sqrt($a);$x++)
			if($a%$x==0)
				return false;
		
		return true;	
	}
	
$incr = 2;
$x[0] = 1;
$count = 1;
$new = 0;

do
	{
		do
			{
				$x[$count]=$x[$count-1]+$incr;
				if($count%4==0)
					$flag=X;
				$count++;
			}
		while($flag!=X);
		
		$incr=$incr+2;
		unset($flag);
		
		for($n=($count-4);$n<$count;$n++)
			if(is_prime($x[$n]))
				{$prime[$new]=$x[$n];$new++;}
				
		$ratio = $new/$count;
		//echo $new." ".$count." ".$ratio."<br>";
	}
while($ratio>=.1);

echo (((($count-1)/4)+.5)*2);
?>