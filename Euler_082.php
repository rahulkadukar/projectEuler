<?php $f=file('File.txt');foreach($f as $d=>$e){$f=explode(",", $e);foreach($f as $g=>$h)$a[$d][$g]=$h;}
$col_scan = 0;
	
for($f=0;$f<count($a);$f++) 
{
	for($g=0;$g<count($a);$g++)	
	{
		if($f!=0)
		{
			$exist = 10000000000;
			for($h=0;$h<count($a);$h++)
			{
				$d = $a[$h][$f-1];
				$x = 0;
				if($h<$g)
				{
					for($i=$h;$i<=$g;$i++)
					{
						$x = $x + $a[$i][$f];
					}
					
					$d = $d + $x;
					
					if($d<=$exist)
						$exist = $d;
				}
				
				if($h>$g)
				{
					for($i=$h;$i>=$g;$i--)
					{
						$x = $x + $a[$i][$f];
					}
					
					$d = $d + $x;	
					if($d<=$exist)
						$exist = $d;				
				}
				
				if($h==$g)
				{
					$d = $d + $a[$g][$f];
					if($d<=$exist)
						$exist = $d;
				}
			}
			$r[$g]=$exist;
		}
	}
	if($f!=0)
	for($s=0;$s<count($a);$s++)
		$a[$s][$col_scan]=$r[$s];
	$col_scan++;
}
$exist=100000000000;
for($x=0;$x<count($a);$x++)
{
    if($a[$x][count($a)-1]<=$exist)
		$exist = $a[$x][count($a)-1];
}

echo $exist;
?>