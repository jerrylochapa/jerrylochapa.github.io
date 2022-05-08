<html lang="en">

<head>
<title>Everything Form</title>
</head>

<body>
	
	<h1>Everything Form</h1><br>
	<h2>Fill the form below to become a member today! </h2>
	
	<form action="" method="post">
	<label for="fname">Full Name</label><br>
				<input type="text" id="fname" name="fname" placeholder="Your name.." required><br>
							
	<label for="email">Email</label><br>
				<input type="text" id="email" name="email" placeholder="Your email.." required><br><br>	

	<label for="classChoice">Which Martial Art(s) would you like to learn. Select all for MMA</label><br>
				<input type="checkbox" id="classChoice1" name="boxing" value="Boxing">
				<label for="classChoice1"> Boxing </label><br>
				
				<input type="checkbox" id="classChoice2" name="Muay_Thai" value="Muay Thai">
				<label for="classChoice2"> Muay Thai </label><br>
				
				<input type="checkbox" id="classChoice3" name="wrestling" value="Wrestling">
				<label for="classChoice3"> Wrestling </label><br>
				
				<input type="checkbox" id="classChoice4" name="bjj" value="BJJ">
				<label for="classChoice4"> Brazilian jiu-jitsu</label><br><br><br>
				
		<input type="radio" id="agree" name="termAnswer" value="Agree">
		<label for="agree">I reviewed and agree to the terms </label><br>
		
		<input type="radio" id="disagree" name="termAnswer" value="Disagree">
		<label for="disagree">I disapprove the terms </label><br><br>
		
		
	
		
	<input name="Submit1" type="submit" value="submit" /><br><br>
	
	
	
	</form>
	
	
	<?php 
	
		if(!empty($_POST["Submit1"])){
			$fullName = $_POST["fname"];
			$email = $_POST["email"];
			$classChoice = "";
			$termsOption = "";
			
			if(isset($_POST["boxing"])){
			$boxingClass = $_POST["boxing"];
			$classChoice .= $boxingClass . " ";
			}
			
			if(isset($_POST["Muay_Thai"])){
			$muayThaiClass = $_POST["Muay_Thai"];
			$classChoice .= $muayThaiClass . " ";
			}
			
			if(isset($_POST["wrestling"])){
			$wrestlingClass = $_POST["wrestling"];
			$classChoice .= $wrestlingClass . " ";
			}
			
			
			if(isset($_POST["bjj"])){
			$bjjClass = $_POST["bjj"];
			$classChoice .= $bjjClass . " ";
			}
			
			if(isset($_POST["boxing"], $_POST["Muay_Thai"], $_POST["wrestling"], $_POST["bjj"])){
			$classChoice = "MMA";
			}
			
			if($_POST["termAnswer"] == "Agree"){
				$termsOption = "Agree";
			} else {
				$termsOption = "Disagree";
			}
			
			echo "RESULTS <br>";
			echo "Your full name is " . $fullName . "<br>";
			echo "Your email is " . $email . "<br>";
			echo "You chose the " . $classChoice . " class <br>";
			echo "You " . $termsOption . " with the terms <br>";
			
			
		}
	?>
	<hr />
	<!-- Add terms here-->
	<p><strong>Terms:</strong> Combat sports carry risks that may result in serious injury or, in rare cases death. 
	I UNDERSTAND that I am responsible (as a guardian if participant is underage) for any damage inflicted upon myself or others and void any wrongdoing 
	(indemnify) Scrap Club and its instructors. I agree to follow the gym rules at all times.</p>
	
</body>

</html>