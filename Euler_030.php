<?php $t=-1;for($a=1;$a<=$_GET[n];$a++){$x=str_split($a);for($b=0;$b<count($x);$b++)$s+=pow($x[$b],5);if($a==$s)$t+=$a;unset($x);$s=0;}echo $t;?>