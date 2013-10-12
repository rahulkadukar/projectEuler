<?php 
for($a=0;$a<=200;$a++)
	{
		if($a*1==200)
			{
				$sum++;
				continue;
			}
		if($a*1>200)
			break;
		
		for($b=0;$b<=100;$b++)
			{
				if($a*1+$b*2==200)
					{
						$sum++;
						continue;
					}
				if($a*1+$b*2>200)
					break;
			
				for($c=0;$c<=40;$c++)
					{
						if($a*1+$b*2+$c*5==200)
							{
								$sum++;
								continue;
							}
						if($a*1+$b*2+$c*5>200)
							break;
				
						for($d=0;$d<=20;$d++)
							{
								if($a*1+$b*2+$c*5+$d*10==200)
									{
										$sum++;
										continue;
									}
								if($a*1+$b*2+$c*5+$d*10>200)
									break;
							
								for($e=0;$e<=10;$e++)
									{
										if($a*1+$b*2+$c*5+$d*10+$e*20==200)
											{
												$sum++;
												continue;
											}
										if($a*1+$b*2+$c*5+$d*10+$e*20>200)
											break;
									
										for($f=0;$f<=4;$f++)
											{
												if($a*1+$b*2+$c*5+$d*10+$e*20+$f*50==200)
													{
														$sum++;
														continue;
													}
												if($a*1+$b*2+$c*5+$d*10+$e*10+$f*50>200)
													break;
													
												for($g=0;$g<=2;$g++)
													{
														if($a*1+$b*2+$c*5+$d*10+$e*20+$f*50+$g*100==200)
															{
																$sum++;
																continue;
															}
														if($a*1+$b*2+$c*5+$d*10+$e*10+$f*50+$g*100>200)
															break;
													}
											}
									}
							}
					}
			}
	}

echo ($sum+1);
?>