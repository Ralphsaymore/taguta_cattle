<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header.php'; ?>



<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Animals</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Animals</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Animal </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageBrandTable">
					<thead>
						<tr>							
							<th>Animal Name</th>
							<th>Tag Number</th>
							<th>Animal Color</th>
							<th>Status</th>
							<th style="width:15%;">Options</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
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
				      	<option value="Male">Male</option>
				      	<option value="Female">Female</option>
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
						<option value="Taurus">Taurus</option>
						<option value="Angus">Angus</option>
						<option value="Brahman">Brahman</option>
						<option value="Hereford">Hereford</option>
						<option value="Holstein">Holstein</option>
						<option value="Cross">Cross</option>
						<option value="Boran">Boran</option>
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
						<option value="5">Heifer</option>
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
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add breed -->

<!-- edit brand -->
<div class="modal fade" id="editBreedModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Animal</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-brand-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-brand-result">
		      	<div class="form-group">
		        	<label for="editBrandName" class="col-sm-3 control-label">Animal Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editBrandName" placeholder="Brand Name" name="editBrandName" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		        <div class="form-group">
		        	<label for="editBrandStatus" class="col-sm-3 control-label">Status: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <select class="form-control" id="editBrandStatus" name="editBrandStatus">
					      	<option value="">~~SELECT~~</option>
					      	<option value="1">Available</option>
					      	<option value="2">Not Available</option>
					      </select>
					    </div>
		        </div> <!-- /form-group-->	
		      </div>         	        
		      <!-- /edit breed result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editBrandFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editBrandBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->
<!-- /edit breed -->

<!-- view animal image -->
<div class="modal fade" tabindex="-1" role="dialog" id="viewImageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-info-sign"></i> Animal Image</h4>
      </div>
      <div class="modal-body">
        <p><img src="assets/images/animals/1.png"> </p>
      </div>
      <div class="modal-footer removeBrandFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- view animal image -->

<!-- remove animal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeAnimalModal">
  <div class="modal-dialog">
    <div class="modal-content">
	 <form class="form-horizontal" id="editBrandForm" action="php_action/removeAnimal.php" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Animal</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove this animal ?</p>
      </div>
      <div class="modal-footer removeAnimalFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cancel</button>
        <button type="submit" class="btn btn-primary" id="removeAnimalBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Remove Animal</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /remove brand -->

<script src="custom/js/animals.js"></script>

<?php require_once 'includes/footer.php'; ?>