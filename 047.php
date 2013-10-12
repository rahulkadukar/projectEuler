<?php
error_reporting(E_ALL^ E_WARNING); 
ini_set('max_execution_time', 3000);
$n = array();
$prime = array(2,3);
for($i=5;;$i++){
	$c = '';
	for($b=2;$b<=ceil(sqrt($i));$b++){
		if($i%$b==0){
			$c='X';
			break;
		}
	}
	if($c!='X'){
		array_push($prime,$i);
	}
	else{
		$prim = array();
		$x = 0;
		$num = $i;
		while($num!=1){
			$mod = 0;
			while($mod==0){
				$mod = fmod($num,$prime[$x]);
				if($mod==0){
					$num = $num/$prime[$x];
					array_push($prim,$prime[$x]);
				}
			};
			$x++;
		};
		$prim = array_unique($prim);
		$n[$i] = sizeof($prim);
	}
	if(array_key_exists($i,$n) && array_key_exists($i-1,$n) && array_key_exists($i-2,$n) && array_key_exists($i-3,$n))
		if($n[$i] == 4 && $n[$i-1] == 4 && $n[$i-2] == 4 && $n[$i-3] == 4){
			echo $i - 3;
			exit;
	}
}
?>	