<?php $c=file('File.txt');foreach($c as $d=>$e){$f=explode(",", $e);foreach($f as $g=>$h)$s[$d][$g]=$h;}
for($a=0;$a<count($s);$a++){for($b=0;$b<count($s[0]);$b++){
$w=$s[$a][$b]*$s[$a-1][$b]*$s[$a-2][$b]*$s[$a-3][$b];$x=$s[$a][$b]*$s[$a-1][$b+1]*$s[$a-2][$b+2]*$s[$a-3][$b+3];
$y=$s[$a][$b]*$s[$a][$b+1]*$s[$a][$b+2]*$s[$a][$b+3];$z=$s[$a][$b]*$s[$a+1][$b+1]*$s[$a+2][$b+2]*$s[$a+3][$b+3];
if($w>$x)$i=$w;else $i=$x;if($y>$z)$j=$y;else $j=$z;if($i>$j)$t=$i;else $t=$j;if($t>$u){$u=$t;$l=$a+1;$m=$b+1;}}
}echo $u."<br>Row ".$l." Column ".$m;?>