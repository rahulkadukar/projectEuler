<?php 
$answer = 0;
ini_set('max_execution_time', 3000);
function p($a){return gmp_strval(gmp_fact($a));}
$n="0123456789";
$len= p(strlen($n));
for($i=1;$i<=$len;$i++){
	$str = [];
	$l=strlen($n);
	$m = $i;
	$a=str_split($n);
	$m--;
	do{
		$f=floor($m/p($l-1));
		array_push($str,$a[$f]);
		array_splice($a, $f, 1);
		$a=array_values($a);
		$m-=($f*p($l-1));
		$l--;
	}while($m!=0);
	foreach($a as$m=>$e)
		array_push($str,$e);
	$new = $str;	
	$new = implode(array_splice($new,-3,3));
	if($new % 17 != 0)
		continue;
	else{
		$new = $str;
		$new = implode(array_splice($new,-4,3));
		if($new % 13 !=0)
			continue;
		else{
			$new = $str;
			$new = implode(array_splice($new,-5,3));
			if($new % 11 !=0)
				continue;
			else{
				$new = $str;
				$new = implode(array_splice($new,-6,3));
				if($new % 7 !=0)
					continue;
				else{
					$new = $str;
					$new = implode(array_splice($new,-7,3));
					if($new % 5 !=0)
						continue;
					else{
						$new = $str;
						$new = implode(array_splice($new,-8,3));
						if($new % 3 !=0)
							continue;
						else{
							$new = $str;
							$new = implode(array_splice($new,-9,3));
							if($new % 2 !=0)
								continue;
							else
								$answer += implode($str);	
						}
					}
				}
			}
		}
	}
}
echo $answer;
?>