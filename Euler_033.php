<?php
$nume = [];
$deno = [];
for($a = 10; $a <= 99; $a++){
	for($b = $a+1; $b<=99; $b++){
		$arr1 = str_split($a);	
		$arr2 = str_split($b);
		if(count(array_intersect($arr1,$arr2))>0)
			if($arr1[0] == $arr2[0]){
				if($arr2[1] != 0)
					if($arr1[1]/$arr2[1] == $a/$b){
						array_push($nume, $a);
						array_push($deno, $b);
					}
			}
				
			if($arr1[0] == $arr2[1]){
				if($arr2[0] != 0)
					if($arr1[1]/$arr2[0] == $a/$b){
						array_push($nume, $a);
						array_push($deno, $b);
					}
			}
			
			if($arr1[1] == $arr2[0]){
				if($arr2[1] != 0)
					if($arr1[0]/$arr2[1] == $a/$b){
						array_push($nume, $a);
						array_push($deno, $b);
					}
			}
			
			if($arr1[1] == $arr2[1]){
				if($arr2[0] != 0 && $arr2[1] !=0)
					if($arr1[0]/$arr2[0] == $a/$b){
						array_push($nume, $a);
						array_push($deno, $b);
					}
			}
	}
}
$a = 1; $b = 1;
foreach($nume as $x)
	$a *= $x;

foreach($deno as $x)
	$b *= $x;

echo $a." and ".$b."<br>";
	
$gcd = gcd($b,$a);
echo $b/$gcd;



function gcd($a, $b){
	while($b != 0){
		$x = $b;
		$b = $a % $b;
		$a = $x;
	}
	return $a;
}
?>