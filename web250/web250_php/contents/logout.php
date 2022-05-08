<?php
	session_start();

	if(session_destroy()){
			
		header("Location: ?p=contents/logout_success.php");
	}

?>
   
