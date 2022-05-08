<?php
include("connection.php");
include('session.php');

$oldusername = $row['username'];

if (isset($_POST['update'])) {
	
    $username = $_POST['email'];
	$id = $row['id'];
  
    $sql = "SELECT * FROM crudaccounts WHERE username='$oldusername'";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        $sql = "UPDATE crudaccounts 
                SET username='$username' 
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
			
			echo "Signed in as: {$login_session}";
		}
    ?>

<br><br><h2>Change Account Details </h2>

<form action="" method="post">

	
	<br><br><label for="email">Email</label><br>
				<input type="email" id="email" name="email"  placeholder="new email" required><br>
				

	<input name="update" type="submit" value="update" /><br />
	
	<a href = "?p=contents/delete_account.php" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</a>
	
</form>





