<?php

include("connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$myusername = $_POST['username'];
    $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM accounts WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  $db_data = mysqli_fetch_assoc($result);
	  global $invalid;
	  $invalid = "Username or Password is wrong";
	  
	  
	  
	  if(!empty($myusername) && !empty($mypassword)) {        
	  
		if ($result && mysqli_num_rows($result) > 0) {
            if ($db_data['password'] === $mypassword) {
                $_SESSION['id'] = $db_data['id'];     
				$_SESSION['login_user']	= 	$myusername;
                header("Location: ?p=contents/login_success.php");
                die;
            } 

	  }
	
	}
	

}

?>


<h1>Login </h1>

<form action="" method="post">
	

	<label for="username">Username</label><br>
				<input type="text" id="username" name="username"  required><br>

	<label for="password">Password</label><br>
				<input type="text" id="password" name="password"  required><br>
	<input name="Submit1" type="submit" value="submit" /><br />
	
	<?php
		echo "$invalid";
	?>
	
</form>





