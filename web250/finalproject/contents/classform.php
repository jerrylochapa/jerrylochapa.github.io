<?php
include("connection.php");
include('session.php');
?>

<h1>Online Classes</h1><br>
<h3> Spring Sale | Enjoy our online services at a discount of 25 percent (Ends 6/21/2022) </h3> <br>

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

<h4>Register </h4>


<form id="classchecklist" action="" method="post">

	<label for="classChoice">Which Martial Art(s) would you like to learn. Select all for MMA (Normal Price $300)</label><br><br>
				<input type="checkbox" id="classChoice1" name="boxing" value="Boxing">
				<label for="classChoice1"> Boxing  ----  Normal Cost: $100</label><br><br>
				
				<input type="checkbox" id="classChoice2" name="Muay_Thai" value="Muay Thai">
				<label for="classChoice2"> Muay Thai  ----  Normal Cost: $100</label><br><br>
				
				<input type="checkbox" id="classChoice3" name="wrestling" value="Wrestling">
				<label for="classChoice3"> Wrestling  ----  Normal Cost: $100</label><br><br>
				
				<input type="checkbox" id="classChoice4" name="bjj" value="BJJ">
				<label for="classChoice4"> Brazilian jiu-jitsu   ----   Normal Cost: $100</label><br><br>
		
	
	<input name="Submit1" type="submit" value="submit" /><br><br>	
</form>

<!-- Script to validate the checkbox form is not empty-->
<script src="scripts/validatecheckbox.js"></script>

	<?php 
		$id = $row['id'];
		
		
		if(!empty($_POST["Submit1"])){
			$classChoice = "";
			$termsOption = "";
			
			$originalprice = 0;
			$saleprice = 0;
			
			if(isset($_POST["boxing"])){
				$boxingClass = $_POST["boxing"];
				$classChoice .= $boxingClass . " ";
				$originalprice += 100;
			}
			
			if(isset($_POST["Muay_Thai"])){
				$muayThaiClass = $_POST["Muay_Thai"];
				$classChoice .= $muayThaiClass . " ";
				$originalprice += 100;
			}
			
			if(isset($_POST["wrestling"])){
				$wrestlingClass = $_POST["wrestling"];
				$classChoice .= $wrestlingClass . " ";
				$originalprice += 100;
			}
			
			
			if(isset($_POST["bjj"])){
				$bjjClass = $_POST["bjj"];
				$classChoice .= $bjjClass . " ";
				$originalprice += 100;
			}
			
			$saleprice = $originalprice - ($originalprice * .25);
			
			if(isset($_POST["boxing"], $_POST["Muay_Thai"], $_POST["wrestling"], $_POST["bjj"])){
				$classChoice = "MMA";
				$originalprice = 300;
				$saleprice = $originalprice - ($originalprice * .25);
			}
			
			
			
			echo "<hr>";
			
			echo "You chose the " . $classChoice . " class <br>";
			echo "Original price $<s>" . $originalprice . "</s>. With spring discount it will be \${$saleprice} <br>";
			

			$sql = "UPDATE finalaccounts 
             SET classpick='$classChoice' , price='$saleprice'
             WHERE id='$id'";

			$result = mysqli_query($db, $sql);
			if ($result) {
				echo "Updated Successfully";
			} else {
				echo "Update Failed";
				
			}
			
		}
	?>