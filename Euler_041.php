<?php
$check = [1,2,3,4,5,6,7];
for($a = 7654321; $a > 1; $a-=2){
	$c='A';
	for($b=3;$b<=ceil(sqrt($a));$b+=2)
	{
		if($a%$b==0){
			$c='X';
			break;
		}
	}
	if($c!='X'){
		$arr = str_split($a);
		if(count(array_intersect(array_unique($arr),$check))==7){
			echo $a;
			break;
		}
	}
}
?>

