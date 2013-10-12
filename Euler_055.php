<?php
for($a=1;$a<$_GET[n];$a++)
	{
		$new = $a;
		do
			{
				$count++;
				$test = $new + strrev($new);
				if($test==strrev($test))
					{
						$flag=X;
					}
				$new = $test;
				$test = 0;
			}
		while($flag!=X&&$count<50);
		
		if($flag!=X)
			$total++;
		unset($count);
		unset($flag); 
	}
echo $total;
?>