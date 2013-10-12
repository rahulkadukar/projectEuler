<?php function p($a){$c=-$a;for($x=1;$x<=sqrt($a);$x++){if(fmod($a,$x)==0){$c+=$x;if($a/$x!=$x)$c+=($a/$x);}}return $c;}
$c=0;for($a=1;$a<=$_GET[n];$a++){$b=p($a);if($b>$a){$x[$c]=$a;$c++;}}
for($a=0;$a<count($x);$a++)for($b=0;$b<count($x);$b++){$u[$x[$a]+$x[$b]]=1;if($x[$a]+$x[$b]>$_GET[n])break;}$t=0;
for($a=1;$a<=$_GET[n];$a++)if($u[$a]!=1)$t+=$a;echo $t;?>