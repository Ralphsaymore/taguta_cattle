	<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header.php';

$animalid = $_POST['animalId'];

if($_POST['submitbutton'] == 'details')
{
  ///process details
  echo "Processing details";
  
$sql = "SELECT * FROM animal WHERE animal_id ='$animalid'";
$result = $connect->query($sql);

while ( $row =  $result->fetch_assoc() )
{
$name = $row['animal_name'];
$tagNumber = $row['tag_number'];
$breedType = $row['breed_type'];
$group = $row['group_'];
$sex = $row['sex'];
$dateOfBirth = $row['dateOfBirth'];
$color = $row['color_marking'];
$description = $row['description'];
$status = $row['status'];
}
if($status ==1){
	$status = "Available";
}
else {
	$status = "Lost / Stolen";
}

if($group ==1){
	$group  = "Bull";
}
else if($group ==2){
	$group  = "Steer";
}
else if($group ==3){
	$group  = "Cow";
}
else {
	$group = "Calf";
}
?>
	
	
	
	<form class="form-horizontal" action="php_action/updateAnimal.php" method="POST" enctype='multipart/form-data'>
	      <div class="modal-header">
		  	<input type="hidden" class="form-control" id="animalId" placeholder="" name="animalId" value="<?php echo $animalid ?>" autocomplete="off" >
		  <a href="animal.php">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </a>
	        <h4 class="modal-title"><i class=""></i> Animal Details</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Animal Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="animalName" placeholder="<?php echo $name ?>" name="animalName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
          <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Tag Number: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="tagNumber" placeholder="<?php echo $tagNumber ?>" name="tagNumber" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
           			
	        <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Sex: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="AnimalSex" name="animalSex">
				      	<option value=""><?php echo $sex ?></option>
				      	<option value="1">Male</option>
				      	<option value="2">Female</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	 
			
			
			 <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Animal Color: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="AnimalColor" name="animalColor">
				      	<option value=""><?php echo $color ?></option>
				      	<option value="Black">Black</option>
				      	<option value="Brown">Brown</option>
							<option value="Black and White">Black and White</option>
				      	<option value="Dark Brown">Dark Brown</option>
							<option value="Sported">Sported</option>
				      	<option value="White">White</option>
							<option value="Red">Red</option>
				      	<option value="Simmental">Simmental</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	 

			 <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Breed Type: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="breedType" name="breedType">
				      	<option value=""><?php echo $breedType ?></option>
						<option value="Taurus">Taurus</option>
						<option value="Angus">Angus</option>
						<option value="Brahman">Brahman</option>
						<option value="Hereford">Hereford</option>
						<option value="Holstein">Holstein</option>
				   
				      </select>
				    </div>
	        </div> <!-- /form-group-->
			 <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Animal Group: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="breedName" name="animalGroup">
				      	<option value=""><?php echo $group ?></option>
						<option value="1">Bull</option>
						<option value="2">Steer</option>
						<option value="3">Cow</option>
						<option value="4">Calf</option>
				      	<?php 
				      	$sql = "SELECT id, breed_id, name FROM breed";
								$result = $connect->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[2]."'></option>";
								} // while
								
				      	?>
				      </select>
				    </div>
	        </div> <!-- /form-group-->
			<div class="form-group">
	        	<label for="animalImage" class="col-sm-3 control-label">Animal D.O.B / D.O. Purchase: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
					    <!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    <div class="kv-avatar center-block">					        
					        <input type="date" class="form-control" id="dateOfBirth" placeholder="<?php echo $dateOfBirth ?>" name="DateOfBirth"  style="width:auto;"/>
					    </div>
				      
				    </div>
	        </div> <!-- /form-group-->	 
			<div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Description: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <textarea rows ="8" class="form-control" id="animalDescription" placeholder="<?php echo $description ?>" name="animalDescription" autocomplete="off"></textarea>
				    </div>
	        </div> <!-- /form-group-->

              <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Status: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="AnimalSex" name="animalStatus">
				      	<option value=""><?php echo $status ?></option>
				      	<option value="1">Available</option>
				      	<option value="2">Lost / Stolen</option>
						<option value="3">Death</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	 			

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <a href="animal.php">  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </a>
	        
	        <button type="submit" class="btn btn-primary" name='but_upload'>Update Animal Status</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
<?php
}
elseif($_POST['submitbutton'] == 'image')
{
  ///process image
   $sql = "SELECT * FROM animal WHERE animal_id ='$animalid'";
$result = $connect->query($sql);

while ( $row =  $result->fetch_assoc() )
{
$name = $row['animal_name'];
$image = $row['animal_image'];

}

 ?>
    
 	<form class="form-horizontal" action="php_action/changeImage.php" method="POST" enctype='multipart/form-data'>
	
	      <div class="modal-header">
		  <a href="animal.php">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </a>
	        <h4 class="modal-title"><i class=""></i> Animal Image</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>
			
	        </div> <!-- /form-group-->
			 
			<div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label"><?php echo $name ?>: </label>
	        	
					  <img src= "<?php echo $image ?>" width="750" height ="450">
					 
				    </div>
					
				
	   <div class="form-group">
	        	<label for="animalImage" class="col-sm-3 control-label">Update Image: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
					    <!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    <div class="kv-avatar center-block">					        
					        <input type="file" class="form-control" id="animalImage" placeholder="Animal Image" name="animalImage" class="file-loading" style="width:auto;"/>
					    </div>
				      
				    </div>
	        </div> <!-- /form-group-->	
	        </div> <!-- /form-group-->

            			

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <a href="animal.php">  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </a>
			 <input type="hidden" class="form-control" id="animalId" placeholder="" name="animalId" value="<?php echo $animalid ?>" autocomplete="off" >
	        <button type="submit" class="btn btn-primary" name='but_upload'>Update Image</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
 
 <?php
}

 require_once 'includes/footer.php';?>