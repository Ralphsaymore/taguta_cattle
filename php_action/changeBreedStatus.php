<?php 	

require_once 'core.php';

if($_POST) {
	
	$breedId		= $_POST['breedId'];
$sql = "SELECT * FROM breed WHERE breed_id = '$breedId' ";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeBrands = ""; 

 while($row = $result->fetch_array()) {
 	$status = $row[4];
 }
 

if($status==1){
	$status=0;
}else $status = 1;
	
		$sql = "UPDATE breed SET status = '$status')
				WHERE breed_id = '$breedId' ";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Name Successfully Updated";	
					echo "<script type='text/javascript'>alert('$message');</script>";

				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while updating details";
	}			}
}	
header( 'Location: ../dashboard.php' ) ;
?>