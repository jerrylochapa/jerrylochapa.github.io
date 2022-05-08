<html lang="en">

<head>
<title>Math Date String</title>
</head>

<body>
	
	<h1>Demonstrate Math, Date, and Strings</h1><br>
	<h2>Welcome to our Spring Sale!</h2> <br>
	<h3> Enjoy our online services at a discount of 25 percent (Ends 6/21/2022) </h3> <br>

	
	<!-- Add current date and countdown function to the end of sale -->
	<?php 
		$currentDay = date("Y-m-d");
		
		$saleEnds = strtotime("2022-06-21");
	
		$daysLeftInSale = ($saleEnds - (strtotime($currentDay)))/60/60/24;	
              
		echo "Today is " . $currentDay . "<br>";
		
		//if condition days left is > 0
        if($daysLeftInSale > 0 )
        {
			echo  $daysLeftInSale . " days left before this sale ends" .  "<br>";    
        } 
        else
        {
        	echo "Sale Ended";
        }
	 
		
	?>
	
	<h4>Class Categories </h4>
	
	<hr />
	
	<h4> Striking </h4>
	
	<img src="images/StandUp.png" width="450"  height="350" alt="Stand Up Martial Arts">
	<?php
	
		$discount = .25;
		
		$classPrice = 100;
		
		$fullClassPrice = 200;
		
		$discountedClass = $classPrice -  ($classPrice * $discount);
		
		$fullDiscount = $fullClassPrice - ($fullClassPrice * $discount);
		
		echo "The online striking classes offered in ScrapClub MMA are Boxing and or Muay Thai. Each class normally cost \${$classPrice}  each or \${$fullClassPrice} 
			 for both, but with our spring sale you can get each class for \${$discountedClass}  or \${$fullDiscount} for both";
		
	?>
	
	<hr />
	
	<h4> Grappling </h4>
	<img src="images/Grappling.png" width="450"  height="350" alt="Grappling Martial Arts">
	<?php
	
		$discount = .25;
		
		$classPrice = 100;
		
		$fullClassPrice = 200;
		
		$discountedClass = $classPrice -  ($classPrice * $discount);
		
		$fullDiscount = $fullClassPrice - ($fullClassPrice * $discount);
		
		
		echo "The online grappling classes offered in ScrapClub MMA are Wrestling and or Brazilian jiu-jitsu. Each class normally cost \${$classPrice}  each or \${$fullClassPrice} 
			 for both, but with our spring sale you can get each class for \${$discountedClass}  or \${$fullDiscount} for both";
		
	?>
	
	<hr />
	<h4> MMA </h4>
	<?php
	
		$discount = .25;
		
		$classPrice = 300;
		
		$discountedClass = $classPrice -  ($classPrice * $discount);
				
		echo "The online MMA class offered in ScrapClub MMA is a combination of both the striking and grappling categories (Boxing, Muay Thai, Wrestling, Brazilian jiu-jitsu all in one class). 
		This class normally cost \${$classPrice} , but with our spring sale it will cost \${$discountedClass}";
		
	?>
	
	
	
	
	
</body>

</html>