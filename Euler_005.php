<?php $x=$_GET[n];$t=1;for($a=1;$a<=$x;$a++)$n[$a]=$a;for($a=2;$a<=$x;){do{$g=B;$f=X;for($b=2;$b<=$x;$b++){if($n[$b]%$a==0){$g=A;$n[$b]/=$a;if($f==X)
{$t*=$a;$f=A;}}}}while($g==A);$a++;}echo$t;?>