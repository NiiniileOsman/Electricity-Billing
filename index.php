<!DOCTYPE html>

<?php
session_start();
error_reporting(0);
include_once 'includes/db.php';
?>

<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Electric Management System</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/download.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			
				<!-- topbae -->

		<?php
        require_once('includes/topbar.php');
		?>

				<!-- topbar -->

		</div>

		<!-- start Sidebar -->
		<?php
        require_once('includes/sidebar.php');
		?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"> Dashboard</h2>
							</div>						
						</div>
					</div>
				</div>

<section class="content">
<div class="container-fluid">
<div class="row">
		
	<div class="col-xl-4 col-md-6 mb-4 ">
  	<div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body bg-warning">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Administrators</div>

			<?php
				include('includes/db.php');
				$query = "SELECT id from admins order by id";
				$result = $con->query($query);
				$num_rows = $result->num_rows;
				echo'<h1 class="text-light">'.$num_rows.'</h1>'
			?>
		</div>
		<div class="col-auto">
		<i class="fas fa-user fa-2x text-light"></i>
		</div>
	  </div>
	</div>
  </div>
</div>


<div class="col-xl-4 col-md-6 mb-4 ">
  <div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body bg-danger">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Emplooye</div>

			<?php
				include('includes/db.php');
				$query = "SELECT empid from emp order by empid";
				$result = $con->query($query);
				$num_rows = $result->num_rows;
				echo'<h1 class="text-light">'.$num_rows.'</h1>'
			?>
		</div>
		<div class="col-auto">
		  <i class="fas fa-address-card fa-2x text-light"></i>
		</div>
	  </div>
	</div>
  </div>
</div>


<div class="col-xl-4 col-md-6 mb-4 ">
  <div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body bg-dark">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Emplooyes Get Salary</div>

			<?php
				include('includes/db.php');
				$query = "SELECT empid from empsalary order by empid";
				$result = $con->query($query);
				$num_rows = $result->num_rows;
				echo'<h1 class="text-light">'.$num_rows.'</h1>'
			?>
		</div>
		<div class="col-auto">
		  <i class= "fas fa-dollar-sign fa-2x text-light"></i>
		</div>
	  </div>
	</div>
  </div>
</div>




<div class="col-xl-4 col-md-6 mb-4 ">
  	<div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body bg-primary">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Customers</div>

			<?php
				include('includes/db.php');
				$query = "SELECT empid from customer order by empid";
				$result = $con->query($query);
				$num_rows = $result->num_rows;
				echo'<h1 class="text-light">'.$num_rows.'</h1>'
			?>
		</div>
		<div class="col-auto">
		  <i class="fas fa-users fa-2x text-light"></i>
		</div>
	  </div>
	</div>
  </div>
</div>



<div class="col-xl-4 col-md-6 mb-4 ">
  <div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body bg-warning">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Customers Write Invoice</div>

			<?php
				include('includes/db.php');
				$query = "SELECT empid from invoice order by empid";
				$result = $con->query($query);
				$num_rows = $result->num_rows;
				echo'<h1 class="text-light">'.$num_rows.'</h1>'
			?>
		</div>
		<div class="col-auto">
		  <i class="fas fa-file-invoice-dollar fa-2x text-light"></i>
		</div>
	  </div>
	</div>
  </div>
</div>


<div class="col-xl-4 col-md-6 mb-4 ">
  <div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body bg-danger">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Customers Paid Fee</div>

			<?php
				include('includes/db.php');
				$query = "SELECT empid from paid order by empid";
				$result = $con->query($query);
				$num_rows = $result->num_rows;
				echo'<h1 class="text-light">'.$num_rows.'</h1>'
			?>
		</div>
		<div class="col-auto">
		  <i class="fas fa-donate fa-2x text-light"></i>
		</div>
	  </div>
	</div>
  </div>
</div>



</div>

<!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
</section>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">Electricity Usage Calculating </h5>
					<div class="card-body">
						<div id="morris_udateing"></div>
					</div>
</div>



				<br> <br /> <br />
                
                 			
			</div>
			</div>				
			</div>
			</div>

			<br> <br /> <br> <br /> <br> <br /> <br> <br /> <br> <br /> <br> <br /> <br /> <br /> <br />


		<?php
         require_once('includes/footer.php');
		?>
		



	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script>
	
<script src="assets/morris-bundle/raphael.min.js"></script>
 <script src="assets/morris-bundle/morris.js"></script>
 <script src="assets/morris-bundle/Morrisjs.js"></script>

</body>
</html>