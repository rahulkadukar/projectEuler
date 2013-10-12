<?php
$count=0;
for($b=0;$b<2;$b++)
{
for($a=0;$a<=999;$a++)
{$demo[$count][$a]=0;$number[$count][$a]=0;}
$count++;
}

$demo[0][999]=1;
$demo[1][999]=1;
$number[0][999]=1;
$number[1][999]=1;

$total = 2;

do
{
	for($c=999;$c>=0;$c--)
	{
			$sum     			= $demo[0][$c]+$demo[1][$c]+$remain;
			$remain 			= floor($sum/10);
			$sum	 			= fmod($sum,10);
			$number[2][$c]	= $sum;
	}
	
	for($h=0;$h<=999;$h++)
	{
		$demo[0][$h]=$demo[1][$h];
		$demo[1][$h]=$number[2][$h];
		//echo $number[2][$h];
	}
		
	//echo "<br>";
	$total = $total + 1;
	if($number[2][0]==1)
	{
		echo $total;
		exit;
	}	
}while($total>0);



?>