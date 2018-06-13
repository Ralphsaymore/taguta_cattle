<?php
require_once 'core.php';

if($_POST) {
     	
	$breedName	= $_POST['breedName'];
  $description			= $_POST['description'];
  $status			= $_POST['breedStatus'];
 
				
				$sql = "INSERT INTO breed (name, description, status) 
				VALUES ('$breedName', '$description', '$status')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Breed Successfully Added";	
					echo "<script type='text/javascript'>alert('$message');</script>";
					header( 'Location: ../dashboard.php' ) ;

				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the breed";
				}

			
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST

?>

