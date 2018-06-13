<?php
require_once 'core.php';

if($_POST) {
     	
	$name	= $_POST['groupName'];
  $description			= $_POST['description'];
  $status	= $_POST['groupStatus'];
 
				
				$sql = "INSERT INTO groups (name, status, description) 
				VALUES ('$name', '$status', '$description')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Group Successfully Added";	
					echo "<script type='text/javascript'>alert('$message');</script>";
					header( 'Location: ../dashboard.php' ) ;

				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the group";
				}

			
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST

?>

