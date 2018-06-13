<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

$message = "Animal Successfully Added";

if(isset($_POST['but_upload'])){
 
 $name = $_FILES['animalImage']['name'];
 $target_dir = "../assests/images/animals/";
 $target_file = $target_dir . basename($_FILES["animalImage"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
  $query = "insert into images(name) values('".$name."')";
  mysqli_query($connect,$query);
  
  // Upload file
  move_uploaded_file($_FILES['animalImage']['tmp_name'],$target_dir.$name);

 }
 
}


if($_POST) {
     	
  $target_dir = "assests/images/animals/";
	$animalName		= $_POST['animalName'];
  $tagNumber			= $_POST['tagNumber'];
  $animalSex			= $_POST['animalSex'];
  $animalGroup 			= $_POST['animalGroup'];
  $breedType 			= $_POST['breedType'];
  $animalColor 			= $_POST['animalColor'];
  $animalDescription	= $_POST['animalDescription'];

  
$url = $target_dir.$name;
				
				$sql = "INSERT INTO animal (animal_name, animal_image, tag_number, breed_type, group_, sex, color_marking, description, status) 
				VALUES ('$animalName', '$url', '$tagNumber', '$breedType', '$animalGroup', '$animalSex','$animalColor', '$animalDescription', 1)";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Animal Successfully Added";	
					echo "<script type='text/javascript'>alert('$message');</script>";
					header( 'Location: ../dashboard.php' ) ;

				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}

			
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST

