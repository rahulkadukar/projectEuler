<?php 
function p($original,$number,$level)
{
    $second = $original * ($level + 1);
    $x = str_split($number);
    $y = str_split($second);
    sort($x);
    sort($y);
    if(count($x)==count($y))
        for($g=0;$g<count($x);$g++)
            {if($x[$g]!=$y[$g])
                return Z;  }
    else
        return Z;
    
    
    $level++;
    if($level==7)
        {
            echo $original;
            exit;            
        }

    $number = p($original,$second,$level);
        return $number;
}

$a=1000000;
   
do
{
$x = p($a,$a,1);
$a++;
}while($flag!=X&&$a<1500000);

echo "No solution found";

?>