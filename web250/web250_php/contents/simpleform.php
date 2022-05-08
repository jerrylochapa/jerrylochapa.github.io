<!DOCTYPE HTML>
<html lang="en">

<head>
<title>M6 Forms</title>
</head>

<body>
	
	<h1>M6 Forms</h1>
	
	<hr />
	
	<h2>POST Form </h2>
	<form action="" method="post">
	<label for="fname">First Name</label><br>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required><br>

	<label for="lname">Last Name</label><br>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required><br>
	<input name="Submit1" type="submit" value="submit" /><br />
	</form>
	
	
	<?php 
		if(!empty($_POST["Submit1"])){
			$fname = $_POST["firstname"];
			$lname = $_POST["lastname"];
			
			echo "Your first name is " . $fname . "<br>";
			echo "Your last name is " . $lname . "<br>";
		}
	?>
	
	<hr />
	
	<h2>GET Form </h2>
	<form action="" method="get">
	<label for="favArt">Favorite Martial Art</label><br>
				<input type="text" id="favArt" name="favoriteArt" placeholder="Favorite Martial Art.." required><br>

	<label for="favFighter">Favorite fighter</label><br>
				<input type="text" id="favFighter" name="favoriteFighter" placeholder="Favorite Fighter.." required><br>
				
	<input type="hidden" name="p" value="contents/simpleform.php" />
	<input name="Submit2" type="submit" value="submit" /><br />
	</form>
	
	
	<?php 
		if(!empty($_GET["Submit2"])){
			$favArt = $_GET["favoriteArt"];
			$favFighter = $_GET["favoriteFighter"];
			
			echo "Your favorite martial art is " . $favArt . "<br>";
			echo "Your favorite fighter is " . $favFighter . "<br>";
		}
	?>
	
	<hr />

	<h2>POST Form </h2>
	<form action="" method="post">
	<label for="favArt">Favorite Martial Art</label><br>
				<input type="text" id="favArt" name="favoriteArt" placeholder="Favorite Martial Art.." required><br>

	<label for="favFighter">Favorite fighter</label><br>
				<input type="text" id="favFighter" name="favoriteFighter" placeholder="Favorite Fighter.." required><br>
	<input name="Submit3" type="submit" value="submit" /><br />
	</form>
	
	
	<?php 
		if(!empty($_POST["Submit3"])){
			$favArt = $_POST["favoriteArt"];
			$favFighter = $_POST["favoriteFighter"];
			
			echo "Your favorite martial art is " . $favArt . "<br>";
			echo "Your favorite fighter is " . $favFighter . "<br>";
		}
	?>
	
	
	
</body>

</html>