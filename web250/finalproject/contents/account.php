<?php
include("connection.php");
include('session.php');

$oldname = $row['name'];
$oldphonenumber = $row['phone'];
$oldusername = $row['username'];

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$phonenumber = $_POST['phone'];
    $username = $_POST['email'];
	$id = $row['id'];
  
    $sql = "SELECT * FROM finalaccounts WHERE username='$oldusername'";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        $sql = "UPDATE finalaccounts 
                SET name='$name', phone ='$phonenumber', username='$username' 
                WHERE id='$id'";
        $result = mysqli_query($db, $sql);
        if ($result) {
            $alert = "Updated Successfully: {$oldusername} has been changed to {$username}";
            header("Location: ?p=contents/account.php&alert=$alert");
        } else {
            $alert = "Update Failed";
            header("Location: ?p=contents/account.php&alert=$alert");
        }
    } else {
        $alert = "Account Does Not Exist";
        header("Location: ?p=contents/account.php&alert=$alert");
    }
}

?>


<h1>Account </h1>

	<?php
        if (isset($_GET['alert'])) {
			echo $_GET['alert'];
        }
		else{
			
			echo "Profile: <br><br>";
			echo "Signed in as: {$login_session} <br>";
			echo "Name: " . $row['name'] . "<br>";
			echo "Phone Number: " . $row['phone'] . "<br>";
						
			if(!$row['classpick'])
			{
				echo "<br>You can register for classes <a href='?p=contents/classform.php'>here</a>";
			}	else{
				echo "Registered classes: " . $row['classpick'] . " total price $" . $row['price'] ."<br>";
			}
			
			
		}
    ?>

	

<br><br><h2>Change Account Details </h2>

<form action="" method="post">
	<br><br><label for="name">Name</label><br>
				<input type="text" id="name" name="name" placeholder="new name" required><br>
				
	<label for="phone">Phone Number</label><br>
				<input type="tel" id="phone" name="phone"  placeholder="new phone number" required><br>
	
	<label for="email">Email</label><br>
				<input type="email" id="email" name="email"  placeholder="new email" required><br>
				

	<input name="update" type="submit" value="update" /><br />
	
	<a href = "?p=contents/delete_account.php" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</a>
	
</form>





