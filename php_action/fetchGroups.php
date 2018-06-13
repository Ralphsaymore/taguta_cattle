<?php 	

require_once 'core.php';

$sql = "SELECT group_id, name, description, status FROM groups ";
$result = $connect->query($sql);

//bulls
$sql = "SELECT * FROM animal WHERE group_ = 1 ";
$Bullquery = $connect->query($sql);
$totalbulls = $Bullquery->num_rows;

//steers
$sql = "SELECT  group_ FROM animal WHERE group_ = 2  ";
$query = $connect->query($sql);
$totalsteers = $query->num_rows;

//cows
$sql = "SELECT  group_ FROM animal WHERE group_ = 3 ";
$query = $connect->query($sql);
$totalcows = $query->num_rows;

//calves
$sql = "SELECT  group_ FROM animal WHERE group_ = 4  ";
$query = $connect->query($sql);
$totalcalves = $query->num_rows;

//lost animals
$sql = "SELECT  group_ FROM animal WHERE status= 0 ";
$query = $connect->query($sql);
$totallost = $query->num_rows;

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeBrands = ""; 

 while($row = $result->fetch_array()) {
 	$brandId = $row[0];
 	// active 
 	if($row[3] == 1) {
 		// activate member
 		$activeBrands = "<label class='label label-success' align='center'>Yes</label>";
 	} else {
 		// deactivate member
 		$activeBrands = "<label class='label label-danger'>NO</label>";
 	}
  
  	$groupId = $row[0];
 	// active 
 	if($row[0] == 1) {
 		// activate bulls
 		$quantity= $totalbulls;
 	} 
	else if($row[0] == 2) {
 		// activate steers
 		$quantity= $totalsteers;
 	}
	else if($row[0] == 3) {
 		// activate cows
 		$quantity= $totalcows;
 	}
	
	else if($row[0] == 4) {
 		// activate calves
 		$quantity= $totalcalves;
 	}
	else {
 		// deactivate animals lost
 		$quantity = $totallost;
 	}
 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editBrandModel" onclick="editBrands('.$brandId.')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeBrands('.$brandId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
 		$row[1], 		
 		$activeBrands,
		$quantity,
 		$button
 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);