<?php 
include('header.php');
include('Sidebar.php');
include 'API.php';
include 'conn.php';
?>



<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Visa Payment App</h2>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">

                        <a href="VPaymentDisplay.php" class="btn btn-secondary btn-round">Add Visa User</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-body">
            <?php
            
   
        ?>
            <div class="row" style="padding: 5px;">
                <div class="col-md-6"></div>
                <div class="form-group col-md-6">

                    <form method="POST">

                        <select name="totalId" id="totalId" class="form-control">
                            <?php
                    include 'conn.php';
                      $cn = $con;  
                      $sql = "SELECT ID  FROM visas";
                      // $test = "SELECT * FROM section WHERE section = '$'";
                      $q = mysqli_query($con,$sql);
                      while($row = mysqli_fetch_array($q)){
                        echo '<a href="Payments.php?id= echo $row[0]"></a>';
                      
                    ?>
                            
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                            <?php } ?>
                        </select>
                    </form>


                </div>

            </div>
            <div class="card bg-primary">
                <div class="card-body">
                    <form action="" method="POST" id="form_data">

                        <div class="row">
                        
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">

                                        <input type="text" name="Id" id="Id" placeholder="Enter Phone..."
                                            class="form-control" required ReadOnly>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <input type="text" name="Name" id="Name" placeholder="Enter Full Name..."
                                            class="form-control" value="#" required ReadOnly>
                                    </div>

                                    <div class="form-group col-md-6">

                                        <input type="text" name="Phone" id="Phone" placeholder="Enter Phone..."
                                            class="form-control" required ReadOnly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="Gender" id="Gender" placeholder="Gender" required
                                            ReadOnly class="form-control">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <input type="text" name="Passport" id="Passport" placeholder="Enter Passport"
                                            required ReadOnly class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="VisaType" id="VisaType" placeholder="Visa Type"
                                            required ReadOnly class="form-control">
                                    </div>
                                    <!-- <div class="form-group col-md-6"> -->
                                    <div class="form-group col-md-6">
                                        <input type="text" name="Country" id="Country" placeholder="Visa Type"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-6">

                                    <input type="text" name="Charge" id="Charge" placeholder="Charge"
                                            class="form-control" required ReadOnly>
                                          
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="Balance" id="Balance" placeholder="Balance" required
                                            class="form-control">

                                    </div>
                                    </br>
                                    <div class="form-group col-md-6">

                                          <input type="text" name="Remained" id="Remained" placeholder="Balance Remained"
                                            required ReadOnly class="form-control">
                                        </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="form col-md-10">
                                        &nbsp; &nbsp; &nbsp;
                                        <button type="submit" class="btn btn-success col-md-3" id="Save"
                                            name="Save">Save</button> &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <button type="submit" class="btn btn-second col-md-3" id="search"
                                            name="btnSave">Clear</button>
                                    </div>
                                    <!-- <div class="col-md-2"></div>                   -->
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['Save'])){
                        $Charge = $_POST['Charge'];
                        $Balance = $_POST['Balance'];
                        $Remained = $_POST['Remained'];
                        $re= $Charge+ $Balance;
                        // header('location: register.html');
                        if($Remained!= $re){
                            echo "<script>alert('This payment must be complete ');</script>";

                        }else{
                            $user = $_POST['Id'];
                        // $pass= $_POST['password'];
                        $checkQry = "SELECT * FROM `visa payment` WHERE `VID` = '". $user ."'";
                        $checkEx = mysqli_query($con, $checkQry);
                        
                        $countU = mysqli_num_rows($checkEx);
                        if ($countU > 0) {
                            echo "<script>alert('This Customer has already Paid ');</script>";
                        } else {


                            $Name=$_POST['Name'];
                            $phone=$_POST['Phone'];
                            $Gender=$_POST['Gender'];
                            $Passport=$_POST['Passport'];
                            $VisaType=$_POST['VisaType'];

                            $Country=$_POST['Country'];
                            $Charge=$_POST['Charge'];
                            $viid=$_POST['Id'];
                            $Balance=$_POST['Balance'];
                            $Remained=$_POST['Remained'];


                            $dd= date("d M Y ");
                            $con = mysqli_connect("localhost" , "root" , "" ,"TravelAgency");
                            $sql=mysqli_query($con, "INSERT into `visa payment`(`ID`, `Name`, `Mobile`, `Gender`, `Passport`, `Visa Type`, `Country`, `Remained`, `Balance`, `Date`, `VID`) values(ID ,'".$Name."', '".$phone."' , '".$Gender."' ,'".$Passport."','".$VisaType."', '".$Country."', '".$Remained."', '".$Balance."' , '".$dd."', '".$viid."')");
                            if(!$sql){
                                echo 'Error at :' .mysqli_error($con);
                            }else{
                                // echo "<script>window.location.href='VPaymentDisplay.php'</script>";
                                // $total = $_POST['totalId'];
                                $sql="update visas set cost='0' ,BalanceRemained='0', advance='0' WHERE id='".$viid."'";
                                $q = mysqli_query($con,$sql);
                                if($q){
                                    echo "<script>window.location.href='VPaymentDisplay.php'</script>";
                                
                                }
                                
                                // header('location: VisaDisplay.php');
                            }
                        }
                    }
                    }
                        


                    ?>

                </div>
            </div>
            <?php
include('footers.php');

?>
            <script src="main.js"></script>