<?php
error_reporting(E_ALL^ E_WARNING); 
ini_set('max_execution_time', 3000);
$prime = array(2,3);
$prim = array(2,5);
$num = 5;
$xx = 1;
for($i=5;$i<1000000;$i+=2){
	$c = '';
	for($b=3;$b<=ceil(sqrt($i));$b+=2){
		if($i%$b==0){
			$c='X';
			break;
		}
	}
	if($c!='X'){
		array_push($prime,$i);
		$num+=$i;
		if($num<1000000)
			array_push($prim,$num);
	}
}
$primez = sizeof($prime);
$primz = sizeof($prim);

for($i=0; $i<$primz; $i++){
	for($j=$i; $j>=0; $j--){
		$new = $prim[$i]-$prim[$j];
		if($new > 1000000)
			break;
		if(in_array($new,$prime)){
			$ss = $i-$j;
			if($ss > $xx){
				$xx = $ss;
				$final = $new;
				//echo "Starts from ".$prime[$j+1]." and ends at ".$prime[$i]." with ".$xx." and sum is ".$new."<br>";
			}
		}
	}
}
echo $final;
?>	