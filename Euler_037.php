<?php
function is_prime($num) 
	{   
		if($num==2)
			return true;
		
        if($num%2==0 || $num ==1)
			return false;
		
		for($i = 3; $i <= sqrt($num); $i+=2) {
                if($num % $i == 0) {
                        return false;
                }
        }
        return true;
	}

function circular_check($num)
	{
		$x = str_split($num);
		for($a=1;$a<=count($x);$a++)
			{
					for($b=0;$b<$a;$b++)
					{
						$demo = $demo.$x[$b];
					}
					$test = is_prime($demo);
						if(!$test)
							return false;
					unset($demo);
			
					for($c=0;$c<count($x);$c++)
					{
						if($c>($a-1))
							$demo = $demo.$x[$c];
					}
					if(!$demo)
						return true;
					$test = is_prime($demo);
						if(!$test)
							return false;
					unset($demo);	
			}
		return true;
	}
	
for($a=11;;$a+=2)
	{
		$test = is_prime($a);
			if($test)
				{
					$check = circular_check($a);
					if($check)
						{
							$total+=$a;
							$sum++;
						}
				}
		if($sum==11)
		{
			echo $total;
			exit;
		}
	}	
?>