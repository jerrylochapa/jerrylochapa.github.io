<?php
	session_start();

	if(!isset($_SESSION['id'])){
		header("Location: index.php");
		
		
	} else{
		
		if(session_destroy()){		
			header("Location: ?p=contents/logout_success.php");
		}
	}

?>
   
