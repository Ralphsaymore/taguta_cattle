<?php 

require_once 'core.php';

if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM animal WHERE dateOfBirth >= '$start_date' AND  status = 1";
	$query = $connect->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Date of Birth </th>
			<th>Animal Name</th>
			<th>Tag Number</th>
			<th>Breed</th>
		</tr>

		<tr>';
		
		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['dateOfBirth'].'</center></td>
				<td><center>'.$result['animal_name'].'</center></td>
				<td><center>'.$result['tag_number'].'</center></td>
				<td><center>'.$result['breed_type'].'</center></td>
			</tr>';	
			
		}
		$table .= '
		</tr>

	</table>
	';	

	echo $table;

}

?>