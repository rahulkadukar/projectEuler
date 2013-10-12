<?php $a=1;$c=2;do{$x=0;for($b=1;$b<sqrt($a);$b++){if($a%$b==0&&$b*$b!=$a)$x+=2;elseif($a%$b==0&&$b*$b==$a)$x+=1;if($x>=$_GET[n]){echo$a;exit;}}$a+=$c;$c+=1;
}while($x<$_GET[n]);?>