<?php 

function is_prime($num) 
	{
        if(!($num - 1) || $num % 2 == 0 && $num!=2)
            return false;
			
		if($num == 2)
			return true;
        
        for($i = 3; $i <= sqrt($num); $i+=2) {
                if($num % $i == 0) {
                        return false;
                }
        }
        return true;
	}

function check_prime($number_1,$number_2,$type)
	{
		$x = 0;
		if($type == 1)
			{
				$sign_1 = 1;
				$sign_2 = 1;
			}
		elseif($type == 2)
			{
				$sign_1 = -1;
				$sign_2 = 1;
			}
		elseif($type == 3)
			{
				$sign_1 = 1;
				$sign_2 = -1;
			}
		elseif($type == 4)
			{
				$sign_1 = -1;
				$sign_2 = -1;
			}			
		do
			{
				$check = ($x * $x) + ($sign_1 * $number_1 * $x) + ($sign_2 * $number_2);
				$test  = is_prime(abs($check));
				if($test)
					{
						$x++;
					}
				else
					return $x;
			}
		while($flag!=X);		
	}
	
echo "<table>";	

$greatest[0]=0;
$greatest[1]=0;
$greatest[2]=0;

for($a=0;$a<1000;$a++)
	{
		for($b=0;$b<1000;$b++)
			{
				$test = is_prime($b);
				if($test)
					{
						$number = check_prime($a,$b,1);
						//echo "<tr><td>".$a."</td><td>".$b."</td><td>".$number."</td></tr>";
						if($number > $greatest[2])
							{
								$greatest[0]=$a;
								$greatest[1]=$b;
								$greatest[2]=$number;
							}
						$number = check_prime($a,$b,2);
						//echo "<tr><td>".($a*-1)."</td><td>".$b."</td><td>".$number."</td></tr>";
						if($number > $greatest[2])
							{
								$greatest[0]=($a*-1);
								$greatest[1]=$b;
								$greatest[2]=$number;
							}						
						$number = check_prime($a,$b,3);
						//echo "<tr><td>".$a."</td><td>".($b*-1)."</td><td>".$number."</td></tr>";
						if($number > $greatest[2])
							{
								$greatest[0]=$a;
								$greatest[1]=($b*-1);
								$greatest[2]=$number;
							}						
						$number = check_prime($a,$b,4);
						//echo "<tr><td>".($a*-1)."</td><td>".($b*-1)."</td><td>".$number."</td></tr>";
						if($number > $greatest[2])
							{
								$greatest[0]=($a*-1);
								$greatest[1]=($b*-1);
								$greatest[2]=$number;
							}						
					}
			}
	}
	
print_r($greatest);	
?>
