<?php require_once 'includes/header.php'; ?>

<?php 
$sql = "SELECT * FROM animal ";
$query = $connect->query($sql);
$countAll = $query->num_rows;

$sql = "SELECT * FROM animal WHERE status = 1";
$query = $connect->query($sql);
$countAllActive = $query->num_rows;

$nonActiveSql = "SELECT * FROM animal WHERE status = 2";
$nonActiveQuery = $connect->query($nonActiveSql);
$countnonActive = $nonActiveQuery->num_rows;

$breedSql = "SELECT * FROM breed WHERE status = 1";
$breedQuery = $connect->query($breedSql);
$countbreed = $breedQuery->num_rows;

//Total Bulls and available bulls-----------------------------------------
$sql = "SELECT * FROM animal WHERE group_ = 1 ";
$Bullquery = $connect->query($sql);
$countBull = $Bullquery->num_rows;

$sql = "SELECT * FROM animal WHERE group_ = 1 AND status = 1";
$ActiveBullquery = $connect->query($sql);
$ActivecountBull = $ActiveBullquery->num_rows; 

//Total cows and available cows-------------------------------------------
$cowSql = "SELECT * FROM animal WHERE group_ = 2";
$cowQuery = $connect->query($cowSql);
$countcow = $cowQuery->num_rows;

$ActivecowSql = "SELECT * FROM animal WHERE group_ = 2 AND status = 1";
$ActivecowQuery = $connect->query($cowSql);
$ActiveCowcount = $ActivecowQuery->num_rows;


//Total calves and available calves-------------------------------------------
$calvesSql = "SELECT * FROM animal WHERE group_ = 3 ";
$calvesQuery = $connect->query($calvesSql);
$countAllcalves = $calvesQuery->num_rows;

$calvesSql = "SELECT * FROM animal WHERE group_ = 3 AND status = 1";
$calvesQuery = $connect->query($calvesSql);
$countcalves = $calvesQuery->num_rows;

//Total heifers and available heifers-------------------------------------------
$heiferSql = "SELECT * FROM animal WHERE group_ = 4 ";
$heiferQuery = $connect->query($heiferSql);
$heiferAllcount = $heiferQuery->num_rows;

$heiferSql = "SELECT * FROM animal WHERE group_ = 4 AND status = 1";
$heiferQuery = $connect->query($heiferSql);
$heifercount = $heiferQuery->num_rows;

//Total steers and available steers-------------------------------------------
$steerSql = "SELECT * FROM animal WHERE group_ = 5 ";
$steerQuery = $connect->query($steerSql);
$steerAllcount = $steerQuery->num_rows;

$steerSql = "SELECT * FROM animal WHERE group_ = 5 AND status = 1";
$steerQuery = $connect->query($steerSql);
$steercount = $steerQuery->num_rows;
/*	$totalRevenue = "";
	while ($orderResult = $orderQuery->fetch_assoc()) {
		$totalRevenue += $orderResult['paid'];
	}
	
	$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
	$lowStockQuery = $connect->query($lowStockSql);
	$countLowStock = $lowStockQuery->num_rows;
*/
$connect->close();

?>


<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.print.css" media="print">

<div class="text-primary text-center"> <h3>TAGUTA LIVESTOCK RECORDS - Version 1.00</h3></div>
<div class="row">
	
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				
				<a href="product.php" style="text-decoration:none;color:black;">
				Active Animals
					<span class="badge pull pull-right"><?php echo $countAllActive; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->

	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Non - Active Animals (Stolen or Lost)
					<span class="badge pull pull-right"><?php echo $countnonActive; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	<div class="col-md-4">
			<div class="panel panel-info">
			<div class="panel-heading">
				<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
					Breeds of Animals
					<span class="badge pull pull-right"><?php echo $countbreed; ?></span>
				</a>
					
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
		</div> <!--/col-md-4-->

	<div class="col-md-4">
		<div class="card">
		  <div class="cardHeader">
		    <h1><?php echo $countAll ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p>Total Number of Animals in the System</p>
		  </div>
		</div> 
		<br/>

		<div class="card">
		  <div class="cardHeader" style="background-color:#245580;">
		    <?php 
		    	echo $ActivecountBull . " / ".$countBull ;
		    	?>
		  </div>

		  <div class="cardContainer">
		    <p> <i class="glyphicon "></i> Available Bulls / Total Number of Bulls  </p>
		  </div>
		</div> 
		<br/>
					<br/>
		
				<div class="card">
		  <div class="cardHeader" style="background-color:#808080;">
		    <?php 
		    	echo $steercount. " / ". $steerAllcount;
		    	?>
		  </div>

		  <div class="cardContainer">
		    <p> <i class="glyphicon "></i> Available Steers / Total Steers in the System</p>
		  </div>
		</div> 
			<br/>
		
				<div class="card">
		  <div class="cardHeader" style="background-color:#000;">
		    <?php 
		    	echo $heifercount." / ".$heiferAllcount;
		    	?>
		  </div>

		  <div class="cardContainer">
		    <p> <i class="glyphicon "></i> Available Heifers / Total Heifers in the system </p>
		  </div>
		</div> 
		
		<br/>
		
				<div class="card">
		  <div class="cardHeader" style="background-color:#ffbf00;">
		    <?php 
		    	echo $ActiveCowcount." / ".$countcow;
		    	?>
		  </div>

		  <div class="cardContainer">
		    <p> <i class="glyphicon "></i> Available cows / Total Number of Cows </p>
		  </div>
		</div> 
		
		<br/>
		
				<div class="card">
		  <div class="cardHeader" style="background-color:#00ffff;">
		    <?php 
		    	echo $countcalves." / ".$countAllcalves;
		    	?>
		  </div>

		  <div class="cardContainer">
		    <p> <i class="glyphicon "></i> Available Calves / Total Number of Calves</p>
		  </div>
		</div> 
		
		
	</div>

	<div class="col-md-8">
	  <img src="assests/images/stock/banner1.jpg"> <img src="assests/images/stock/banner2.jpg">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
		
	</div>

	
</div> <!--/row-->

<!-- fullCalendar 2.2.5 -->
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script>

<?php require_once 'includes/footer.php'; ?>