<html lang="en">

<head>
<title>Fizz Buzz Bang</title>
</head>

<body>
	
	<h1>Fizz Buzz Bang</h1><br>
	
	<form action="" method="post">
	<label for="name">Name</label><br>
				<input type="text" id="name" name="name" placeholder="Jerry" required><br>
											
				<label for="Starting Number">Starting Number</label><br>
				<input type="text" id="starting_number" name="starting_number" placeholder="1" required><br>
				
				<label for="Ending Number">Ending Number</label><br>
				<input type="text" id="ending_number" name="ending_number" placeholder="100" required><br>
				
				<label for="First Word">First Word</label><br>
				<input type="text" id="first_word" name="first_word" placeholder="fizz" required><br>
				
				<label for="First Word Number">First Word Number</label><br>
				<input type="text" id="first_number" name="first_number" placeholder="1" required><br>
				
				<label for="Second Word">Second Word</label><br>
				<input type="text" id="second_word" name="second_word" placeholder="buzz" required><br>
				
				<label for="Second Word Number">Second Word Number</label><br>
				<input type="text" id="second_number" name="second_number" placeholder="2" required><br>
				
				<label for="Third Word">Third Word</label><br>
				<input type="text" id="third_word" name="third_word" placeholder="bang" required><br>
				
				<label for="Third Word Number">Third Word Number</label><br>
				<input type="text" id="third_number" name="third_number" placeholder="3" required><br>
			
		
	<input name="Submit1" type="submit" value="submit" /><br><br>
	
	</form>
	
	<hr />
	
	<?php 
	
		if(isset($_POST["Submit1"])){
                        
			for ($i = $_POST["starting_number"]; $i <= $_POST["ending_number"]; $i++) {
				$word = "";
				
                            if ($i % $_POST["first_number"] == 0) {
                                $word .= "{$_POST["first_word"]}";
                            }

                            if ($i % $_POST["second_number"] == 0) {
                                $word .= "{$_POST["second_word"]}";
                            }

                            if ($i % $_POST["third_number"] == 0) {
                                $word .= "{$_POST["third_word"]}";
                            }

                            if ($word === '') {
                                $word = $i;
                            }
                            echo "$word<br>";
                        }
                        
			
		}
			
			
			
		
	?>
	<hr />
	
	
</body>

</html>