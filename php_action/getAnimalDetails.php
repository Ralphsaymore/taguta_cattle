	<?php require_once 'db_connect.php' ?>
<?php require_once '../includes/header.php';?>
	
	<form class="form-horizontal" action="php_action/addAnimal.php" method="POST" enctype='multipart/form-data'>
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Animal</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Animal Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="animalName" placeholder="Animal Name" name="animalName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
          <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Tag Number: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="tagNumber" placeholder="Tag Number" name="tagNumber" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
           			
	        <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Sex: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="AnimalSex" name="animalSex">
				      	<option value="">~~SELECT~~</option>
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
				      	<option value="">~~SELECT~~</option>
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
				      	<option value="">~~SELECT~~</option>
						<option value="1">Taurus</option>
						<option value="2">Angus</option>
						<option value="3">Brahman</option>
						<option value="4">Hereford</option>
						<option value="5">Holstein</option>
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
	        	<label for="brandStatus" class="col-sm-3 control-label">Animal Group: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="breedName" name="animalGroup">
				      	<option value="">~~SELECT~~</option>
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
	        	<label for="animalImage" class="col-sm-3 control-label">Animal Image: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
					    <!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    <div class="kv-avatar center-block">					        
					        <input type="file" class="form-control" id="animalImage" placeholder="Animal Image" name="animalImage" class="file-loading" style="width:auto;"/>
					    </div>
				      
				    </div>
	        </div> <!-- /form-group-->	 
			<div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Description: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <textarea rows ="8" class="form-control" id="animalDescription" placeholder="Animal Description" name="animalDescription" autocomplete="off"></textarea>
				    </div>
	        </div> <!-- /form-group-->	

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" name='but_upload'>Add Animal</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
		<?php require_once '../includes/footer.php';?>