<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

$message = "Animal Details Successfully Updated";



if($_POST) {
     	
  $target_dir = "assests/images/animals/";
	$animalId		= $_POST['animalId'];
	$name		= $_POST['animalName'];
	$tag		= $_POST['tagNumber'];
	$breed		= $_POST['breedType'];
	$sex		= $_POST['animalSex'];
	$color		= $_POST['animalColor'];
	$group		= $_POST['animalGroup'];
	$description= $_POST['animalDescription'];
	$status     = $_POST['animalStatus'];
	$date	    = $_POST['DateOfBirth'];
	

  echo $status."    ".$tag;
  
				
				$sql  = "UPDATE animal SET
				
				
					status = '$status'
				
				 WHERE animal_id = {$animalId}";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Name Successfully Updated";	
					echo "<script type='text/javascript'>alert('$message');</script>";

				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while updating details";
				}

			
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST

