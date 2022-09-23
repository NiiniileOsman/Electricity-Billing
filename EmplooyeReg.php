<?php
// include_once 'includes/db.php';
include 'EmplooyeReg_process.php';

if (isset($_GET['edit'])) {
    $empid=$_GET['edit'];
    // $con=mysqli_connect("localhost", "root", "", "myproject");
    $record=mysqli_query($con, "SELECT * FROM emp WHERE empid=$empid");
    $data = mysqli_fetch_array($record);

        $FullName=$data['FullName'];
        $UserName=$data['UserName'];
        $Password=$data['Password'];
        // $CPassword=$data['Password'];
        $Email=$data['Email'];
        $Phone=$data['Phone'];
        $Gendar=$data['Gendar'];
        $RegDate=$data['RegDate'];	

}
?>


<!DOCTYPE html>
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
        <!-- topbar -->
		<?php
        require_once('includes/topbar.php');
		?>
		</div>

		<!-- Sidebar -->
		<?php
        require_once('includes/sidebar.php');
		?>

		<div class="main-panel">
		<div class="content">		
        <div class="panel-header">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-secondary pb-2 fw-bold">Emplooye Registration </h2>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
							<a href="#" class="btn"> Home</a> /
							<a href="#" class="btn ">Emplooye Registration</a>
						</div>
					</div>
				</div>
			</div>
            

            <div class="card-body">
            <div class="card bg-primary">
            <div class="card-body">

            <form action="EmplooyeReg_process.php" method="POST">

                                    <div class="row" >
                                            <div class="col-md-12">
                                                <div class="row" >
                                                    
                                                <input type="hidden" name="empid" id="empid" value="<?php echo $empid; ?>">

                                                    <div class="form-group col-md-6">
                                                        <!-- <label for="IDga">Full Name</label> -->
                                                        <input type="text" name="FullName" id="FullName" placeholder="Enter Full Name..." class="form-control"  required value="<?php echo $FullName; ?>" >
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <!-- <label for="">Username</label> -->
                                                        <input type="text" name="UserName" id="UserName" placeholder="Enter Username..."   class="form-control" required value="<?php echo $UserName; ?>" >
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <!-- <label for="">Password</label> -->
                                                        <input type="Password" name="Password" id="Password"  placeholder="Enter Password..." class="form-control" required value="<?php echo $Password; ?>" >
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <!-- <label for="">Confirm Password</label> -->
                                                        <input type="Password" name="CPassword" id="CPassword"  placeholder="Enter Confirm Password..." class="form-control" required value="<?php echo $Password; ?>" >
                                                    </div>
                                                   
                                                    <div class="form-group col-md-6">
                                                        <!-- <label for="emailAddress">Email address<span class="text-danger"> </span></label> -->
                                                        <input type="email" name="Email" id="Email" placeholder="Enter Email..."  required 
                                                        class="form-control" id="emailAddress" value="<?php echo $Email; ?>" >
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <!-- <label for="">Phone</label> -->
                                                        <input type="number" name="Phone" id="Phone" placeholder="Enter Phone..."  class="form-control" required value="<?php echo $Phone; ?>" >
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                    <select name="Gendar" id="Gendar" class="form-control" required  >
                                                    <option value="" selected disabled > --- Select Your Gender ---</option>
                                                    <option value="Male" > Male</option >
                                                    <option value="Female" > Female</option  >
                                                    </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                    <input type="date" id="RegDate" name="RegDate" class="form-control" required  value="<?php echo $RegDate; ?>" >
                                                    <br>
                                                    </div>

                                                   
                                                    <div class="form col-md-12">
                                                        <button type="submit" class="btn btn-success col-md-2" id="save"
                                                        name="save">Register</button> &nbsp; &nbsp; &nbsp;  
                                                            
                                                        <button type="submit" class="btn btn-second col-md-2" id="update"
                                                        name="update">Update</button>   
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>                            
                                    
                     </div>
                    </div>
                                		
                                
    <?php
    $con=mysqli_connect("localhost", "root", "", "myproject");
    $sql=mysqli_query($con, "select * from emp");
    ?>
    
    <div class="card bg-white">
    <div class="card-body">
    <div class="row">
                <div class="col-md-12">
                <div class="table-responsive table-hover table-sm table-sales">
                <table class="table">
                <strong>
                <thead class="text-black" >
        <tr>  
        <th height="15" width="80">ID</th>
        <th height="15" width="200">Full Name</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Email</th> 
        <th>Phone</th>
        <th>Gender</th>
        <th >Register date</th>
        <th>Action</th>  
        </tr>
        </thead>
        </strong>

        <?php

$result = mysqli_query($con, "SELECT * FROM emp");
$i = 1;

        while($row=mysqli_fetch_array($sql)){
        ?>
        
        <tbody class="text-dark">
        <td><?php echo $i; ?></td>
        <td><?php echo $row["FullName"]; ?></td>
        <td><?php echo $row["UserName"]; ?></td>
        <td><?php echo $row["Password"]; ?></td>
        <td><?php echo $row["Email"]; ?></td>
        <td><?php echo $row["Phone"]; ?></td>
        <td><?php echo $row["Gendar"]; ?></td>
        <td><?php echo $row["RegDate"]; ?></td>


            <td>
            <a href="EmplooyeReg.php?edit=<?php echo $row["empid"]; ?> " class="btn btn-primary"> Edit</a>
            <a href="EmplooyeReg_process.php?delete=<?php echo $row["empid"]; ?>" onclick="return  confirm('do you want to delete Y/N')" class="btn btn-danger"> Delete</a>
            </td>

            </tbody>   
            <?php
            $i++;
            }
            ?>
                </table>
                </div>
                </div>
                </div>

                
                
                 </div>				
				</div>				
			</div>
		</div>
        </div>

        </div>				
		</div>
		</div>
        </div>
 
        <br> <br> <br>  <br> <br> 

		#<?php
        // require_once('includes/footer.php');
		//?>		



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
	
</body>
</html>