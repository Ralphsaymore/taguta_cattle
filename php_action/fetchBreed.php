<?php 	

require_once 'core.php';

$sql = "SELECT breed_id, name, description, status FROM breed ";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeBrands = ""; 

 while($row = $result->fetch_array()) {
 	$breedId = $row[0];
 	// active 
 	if($row[3] == 1) {
 		// activate member
 		$activeBrands = "<label class='label label-success'>Available</label>";
 	} else {
 		// deactivate member
 		$activeBrands = "<label class='label label-danger'>Not Available</label>";
 	}

 	$button = '<!-- Single button -->
	<form class="form-horizontal" id="editBrandForm" action="php_action/changeBreedStatus.php" method="POST">
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	   <li><input type="text" name="breedId" value = "'.$breedId.'" hidden="true"> </li>
	    <li><button type="submit" name="submitbutton" value="image" class="btn btn-warning">  Change status</button></li> 
	  </ul>
	</div> </form>';

 	$output['data'][] = array( 		
 		$row[1], 		
 		$activeBrands,
 		$button
 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);