<?php

include("connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$myusername = $_POST['username'];
    $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM crudaccounts WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
	  $db_data = mysqli_fetch_assoc($result);
	  global $invalid;
	  $invalid = "Username or Password is wrong";
	  
	  
	  
	  if(!empty($myusername) && !empty($mypassword)) {        
	  
		if ($result && mysqli_num_rows($result) > 0) {
			  if(password_verify($mypassword, $db_data['password'])) {
                $_SESSION['id'] = $db_data['id'];     
				$_SESSION['login_user']	= 	$myusername;
                header("Location: ?p=contents/account.php");
                die;
            } 

	  }
	
	}
	

}

?>


<h1>Login </h1>

<form action="" method="post">

	<?php
        if (isset($_GET['alert'])) {
			echo $_GET['alert'];
			
        }
    ?>

	<br><br><label for="username">Username</label><br>
				<input type="text" id="username" name="username"  required><br>

	<label for="password">Password</label><br>
				<input type="text" id="password" name="password"  required><br>
	<input name="Submit1" type="submit" value="submit" /><br />
	
	<a href = "?p=contents/signup.php">Don't have an account click here to sign up</a><br>
	<?php
		echo "$invalid";
	?>
	
</form>





