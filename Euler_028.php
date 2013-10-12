<?php
$t=$d=1;
$k[0]=$t;
$i = 2;
for($c=0;$c<floor($_GET[n]/2);$c++)
{
	
	for($a=0;$a<4;$a++)
{
	$k[$d] = $t + $i;
	$t = $k[$d];
	$d++;
}
$i = $i+2;
}
for($x=0;$x<count($k);$x++)
	$s+=$k[$x];
	
echo $s;
?>