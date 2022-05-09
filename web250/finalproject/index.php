<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Scrap Club MMA</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href= "styles/default.css"> 
		<link href="https://fonts.googleapis.com/css2?family=Contrail+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
	</head>
	<body>
			<header>		
				<h1> Scrap Club MMA Gym </h1>
				<p> <em>There's a fighter in all of us </em> </p>
				<div class="topnav"> 
				<a href="index.php">
				<img id="logo" border="0" src="images/scrapclub_logo.jpg" width = "100" height = "100" alt = "Scrap Club logo"></a> 
					<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="?p=contents/account.php">Account</a></li> 
						<li><a href="?p=contents/classform.php">Classes</a></li> 
						<li><a href="?p=contents/logout.php">Logout</a></li> 
						
						
					</ul>
					</nav>
				</div>
			</header>
			
			<!-- dynamic content goes here -->
			<?php
				$sPage = $_GET["p"];
				//echo ("You picked the page: " . $sPage); 
	
				if($sPage == "") {  $sPage = "contents/toc.php"; }
				include($sPage);
			?>
						
			
		<!-- Footer -->
			<footer>
				<br />
				<nav>		
					<a href="https://github.com/jerrylochapa" target="_blank">Github</a> &diams;
					<a href="https://github.com/jerrylochapa/jerrylochapa.github.io/tree/main/web250" target="_blank">Github.io</a> &diams;
					<a href="https://www.codecademy.com/profiles/jerrylochapa" target="_blank">Codecademy</a> &diams;
					<a href="https://www.freecodecamp.org/jerrylochapa" target="_blank">freeCodeCamp</a> &diams;
					<a href="https://jsfiddle.net/user/jerrylochapa4/fiddles" target="_blank">JSFiddle</a> &diams;
					<a href="https://www.linkedin.com/in/jerry-lopez-chaparro-2001" target="_blank">LinkedIn</a> &diams;
				</nav>
				<br />
			
				<p>
					<a href="https://validator.w3.org/check?uri=https://jerrylochapa.github.io/web250/index.html">
						<img src="images/button_validation_html5.png" width="88" height="31" alt="Link to HTML validator">
					</a>

					<a href="https://jigsaw.w3.org/css-validator/validator?uri=https://jerrylochapa.github.io/web250/index.html">
						<img src="images/button_validation_css.png" width="88" height="31" alt="Link to CSS validator">
					</a>
				</p>
			</footer>

	</body>
</html>