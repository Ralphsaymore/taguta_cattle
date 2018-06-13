<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$animalId = $_POST['animalId'];

if($animalId) { 

 $sql = "UPDATE animal SET status = 2 WHERE animal_id = {$animalId}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while removing the animal";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST