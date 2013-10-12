<?php
$prime = [2,3];
for($i=5;;$i+=2){
	$c = '';
	for($b=3;$b<=ceil(sqrt($i));$b+=2)
	{
		if($i%$b==0){
			$c='X';
			break;
		}
	}
	if($c!='X')
		array_push($prime,$i);
	$c = '';
	foreach($prime as $x){
		$new = $i - $x;
		if($new == 0){
			$c='X';
			break;
		}
		$new/=2;
		if(sqrt($new)==floor(sqrt($new))){
			$c='X';
			break;
		}
	}
	if($c!='X'){
		echo $i;
		exit;
	}
}
?>	