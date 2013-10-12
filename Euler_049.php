<?php
$count = 1;
for($a=1000;$a<10000;$a++)
	{for($b=3;$b<=sqrt($a);$b++)
		{
			if($a%2==0)
				{
				$f=X;
				break;}
			
			if($a%$b==0)
				$f=X;		
		}
	if($f!=X)
		{$x[$count]=$a;$count++;}
	$f=A;}

function check($a1,$a2,$a3)
{
	$x=str_split($a1);
	$y=str_split($a2);
	$z=str_split($a3);
	sort($x);
	sort($y);
	sort($z);
	for($a=0;$a<count($x);$a++)
		{if($x[$a]!=$y[$a]||$x[$a]!=$z[$a]||$y[$a]!=$z[$a])
			{return true;}}
			
	echo $a1,$a2,$a3."<br>";
	return true;
			
}	

for($z=0;$z<=count($x);$z++)
	{
		for($y=$z+1;$y<=count($x);$y++)
			{
				$diff = $x[$y]-$x[$z];
				
				$new_number = $x[$z]+(2*$diff);
				if(in_array($new_number,$x))
					$demo = check($x[$z],$x[$y],$new_number);
			}
	}
	
?>