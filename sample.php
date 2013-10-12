<?php
for($a = 4; $a < 220; $a++){
	$c = 0;
	for($b = 1; $b <= $a-1; $b++){
		$gcd = gcd($a, $b);
		if($gcd == 1)
			$c++;
	}
	echo $a." has ".$c."<br>";
}	

function gcd($a, $b){
	while($b != 0){
		$x = $b;
		$b = $a % $b;
		$a = $x;
	}
	return $a;
}
?>