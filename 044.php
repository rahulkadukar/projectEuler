<?php
$pent = [];
for($i=1;;$i++){
	$y = (((3*$i*$i)-$i)/2);
	array_push($pent,$y);
	foreach($pent as $x){
		$a=$y-$x;
		$b=$y+$x;
		if($b!=(2*$y) && $a!=0){
			if((((sqrt((24*$a)+1)+1))/6)==floor(((sqrt((24*$a)+1)+1))/6))
				if((((sqrt((24*$b)+1)+1))/6)==floor(((sqrt((24*$b)+1)+1))/6)){
					echo $a;
					exit;
				}
		}
	}
}
?>	