<?php
for($i=1; $i<=40; $i++)
{
	
	if($i%3==0)
	{
		echo "<br>";
		echo $i;
		echo ":chia het cho 3";
		
	  
	}
	elseif($i%5==0)
	{
		echo "<br>";
		
       echo $i;
       	echo ":chia het cho 5";
	 
	}
	elseif($i%15==0 && $i%5!=0 && $i%3 != 0)
	{
       echo "<br>";
     
       echo $i;
       	echo ":chia het cho 15";
	 
	}

	else
	{
		 echo "<br>";
		
       echo $i;
        echo ":khong chia het cho 3,5,15";
	
	}

}
	
	





?>