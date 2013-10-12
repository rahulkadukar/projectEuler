<?php $f=file('File.txt');foreach($f as $d=>$e){$f=explode(",", $e);foreach($f as $g=>$h)$a[$d][$g]=$h;}

$h=count($a)-1;

for($x=0;$x<=$h*2;$x++)
{
	$d=$x;
	for($y=0;$y<=$x;$y++)
	{
		$incr = 0;
		$z=$d+$y;
		if($z==$x && $d<=$h && $y<=$h)
			{
				$e = $a[$d][$y];
				$f = $a[$d-1][$y];
				$g = $a[$d][$y-1];
				
				if($f==NULL&&$g==NULL)
					$incr = 0;
				elseif($f==NULL)
					$incr = $g;
				elseif($g==NULL)
					$incr = $f;
				elseif($f<=$g)
					$incr = $f;
				else 
					$incr = $g;
				
				$a[$d][$y]+=$incr;
				$c++;
			}
		if($c>$x)
		 break;
		$d--;
	}
	$c=0;
}
echo $a[$h][$h];
?>