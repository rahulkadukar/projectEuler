<?php $r=file('File.txt');foreach($r as $c=>$l)$s[$c]=$l;$w=count($s);for($a=0;$a<$w;$a++)$t=$t+$s[$a];printf("%.0f",$t);?>