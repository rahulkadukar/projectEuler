<?php
$c=[1,2,3,4,5,6,7,8,9];
for($a=9200;$a<9500;$a++){
	$f=str_split($a);	
	$g=str_split($a*2);
	if(count(array_intersect(array_unique(array_merge($f,$g)),$check))==9){
		$n='';
		foreach($r as $x)
			$n.=$x;
	}
}
echo $n;
?>