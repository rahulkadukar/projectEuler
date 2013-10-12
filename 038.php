<?php
$check = [1,2,3,4,5,6,7,8,9];
for($a = 9200; $a < 9500; $a++){
	$arr1 = str_split($a);	
	$arr2 = str_split($a * 2);
	$result = array_unique(array_merge($arr1, $arr2));
	if(count(array_intersect($result,$check))==9){
		$new = '';
		foreach($result as $x){
			$new = $new.$x;
		}
	}
}
echo $new;
?>