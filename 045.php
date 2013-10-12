<?php
for($i=144;;$i++){
	$y = $i*(2*$i-1);
	if((((sqrt((24*$y)+1)+1))/6)==floor(((sqrt((24*$y)+1)+1))/6)){
		echo $y;
		exit;
	}
}
?>	