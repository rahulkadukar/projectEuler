<?php function p($n){for($b=2;$b<=sqrt($n);$b++)if($n%$b==0){$p=X;break;}if($p!=X)return$n;}
$t=1;$n=$_GET[n];for($a=2;$a<=sqrt($n);$a++){if(fmod($n,$a)==0){$x=p($a);if($x!=0)$t=$x;$x=p($n/$a);if($x!=0)$t=$x;}}
if($t!=1)echo$t;else echo$n;?>