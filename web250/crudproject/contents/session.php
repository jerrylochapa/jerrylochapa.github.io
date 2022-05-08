<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $id = $_SESSION['id'];
   
   $ses_sql = mysqli_query($db,"select * from crudaccounts where id = '$id' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){ 
		   header("location: ?p=contents/login.php");
		   die();
		
   }
   
?>