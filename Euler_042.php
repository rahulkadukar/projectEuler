<?php $l=file('File.txt');foreach($l as$u=>$v){$h=explode(",",$v);foreach($h as$l=>$c)$s[$l]=$c;}
for($a=1;$a<25;$a++)$x[$a]=$a*($a+1)*0.5;for($a=0;$a<count($s);$a++)
{$l=0;for($b=0;$b<strlen($s[$a]);$b++)$l+=hexdec(bin2hex(substr($s[$a],$b,1)))-64;if (in_array($l,$x))$g++;}echo$g;?>