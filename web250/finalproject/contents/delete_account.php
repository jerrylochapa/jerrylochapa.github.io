<?php

include("connection.php");
include("session.php");
session_start();

$id = $row['id'];

$sql = "SELECT * FROM finalaccounts WHERE id='$id'";
$result = mysqli_query($db, $sql);
if ($result->num_rows > 0) {
    $sql = "DELETE FROM finalaccounts 
                WHERE id='$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        session_destroy();
		
        header("Location: ?p=contents/delete_success.php");
        die;
    } else {
        $update_sucess = "Delete Failed";
    }
} else {
    $update_sucess = "Account does not exist";
}

?>