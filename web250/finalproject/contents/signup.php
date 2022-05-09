<?php
include("connection.php");
session_start();

if(isset($_SESSION['id']))
{
	header("Location: ?p=contents/account.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
    $phonenumber = $_POST['phone'];
	$username = $_POST['email'];
    $password = $_POST['password'];

	  
	  $password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "SELECT * FROM finalaccounts WHERE username='$username'";
      $result = mysqli_query($db, $sql);
		if (!$result->num_rows > 0) {
            $sql = "INSERT INTO finalaccounts (name, phone, username, password)
					VALUES ('$name', '$phonenumber', '$username', '$password')";
            $result = mysqli_query($db, $sql);
            if ($result) {
                $alert = "Account Created Successfully";
                header("Location: ?p=contents/login.php&alert=$alert");
                die;
                $username = "";
                $email = "";
                $_POST['password'] = "";            
            } else {
                $alert = "Create Account Failed";
                header("Location: ?p=contents/signup.php&alert=$alert");
            }
        } else {
            $alert = "Account Already Exists with that email";
            header("Location: ?p=contents/signup.php&alert=$alert");
        }
	

}

?>


<h1>Sign Up </h1>


<form action="" method="post">

	<label for="name">Name</label><br>
				<input type="text" id="name" name="name"  required><br>
				
	<label for="phone">Phone Number</label><br>
				<input type="tel" id="phone" name="phone"   required><br>
	
	<label for="email">Email</label><br>
				<input type="email" id="email" name="email"  required><br>

	<label for="password">Password</label><br>
				<input type="password" id="password" name="password"  required><br>
	<input name="Submit1" type="submit" value="submit" /><br />
	
	<?php
        if (isset($_GET['alert'])) {
			echo $_GET['alert'];
        }
    ?>
	
</form>





