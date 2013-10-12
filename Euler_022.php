<?php $l=file('File.txt');foreach($l as$u=>$v){$h=explode(",",$v);foreach($h as$l=>$c)$s[$l]=$c;}
sort($s);for($a=0;$a<count($s);$a++){$l=0;$t=$a+1;for($b=0;$b<strlen($s[$a]);$b++)
$l+=hexdec(bin2hex(substr($s[$a],$b,1)))-64;$t*=$l;$y+=$t;}echo $y;?>

