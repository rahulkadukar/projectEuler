<?php for($a=1;$a<$_GET[n];$a++){for($b=1;$b<$a/1.41;$b++){$x=sqrt($a*$a-$b*$b);if(ceil($x)==$x)$t[$a+$b+$x]+=1;}if($t[$a]>$f){$f=$t[$a];$i=$a;}}echo$i;?>