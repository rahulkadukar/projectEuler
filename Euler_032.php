<?php
$new = 0;
$randomd = [];
$check = [1,2,3,4,5,6,7,8,9];
for($a = 1; $a <= 100; $a++){
	$alen = strlen($a);
	$arr1 = str_split($a);
	for($b = 100; $b<=9999; $b++){
		$blen = strlen($b);
		$c = $a * $b;
		
		$clen = strlen($c);	
		if($alen + $blen + $clen == 9){
			$arr2 = str_split($b);	
			$arr3 = str_split($c);
			$result = array_unique(array_merge($arr1, $arr2, $arr3));
			if(count(array_intersect($result,$check))==9){
				echo $a." * ".$b." = ".$c."<br>";
				array_push($randomd, $c);
			}
		}
		
		if($c >= 10000){
			break;
		}
	}
}
$result = array_unique($randomd);
foreach($result as $x){
	$new = $new + $x;
}
echo $new;
?>