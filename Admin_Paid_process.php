<?php
session_start();
include_once 'includes/db.php';

$FullNames = "";
$Phone = "";
$TotalKillowat = "";
$TotalAmount = "";
$paid = "";
$rest = "";
$RegDate = "";
$empid = 0;




if (isset($_POST['save'])) {

	$TotalKillowat=$_POST['TotalKillowat'];
	$TotalAmount = $_POST['TotalAmount'];
    $paid = $_POST['paid'];
    $rest = $TotalAmount - $paid;

	$FullNames=$_POST['FullNames'];
	$Phone=$_POST['Phone'];
	// $paid=$_POST['paid'];
	// $TotalAmount=$_POST['TotalAmount'];
	// $RegDate=$_POST['RegDate'];
	$RegDate= date("d M Y ");



	$sql= "insert into paid ( FullName, Phone , TotalKillowat , TotalAmount , paid, rest, RegDate) VALUES ( '$FullNames', '$Phone' , '$TotalKillowat' , '$TotalAmount' , '$paid' , '$rest', '$RegDate')";
	if (mysqli_query($con, $sql)) { 
		echo "<script>alert('Paid Registered Successfully');</script>";
		echo "<script>window.location.href='Admin_Paid.php'</script>";
	} else {
		   mysqli_close($con);
		}
   
    }                    

// For updating records
	if (isset($_POST['update'])){

		$TotalAmount = $_POST['TotalAmount'];
		$paid = $_POST['paid'];
		$rest = $TotalAmount - $paid;
	
		$FullNames=$_POST['FullName'];
		$Phone=$_POST['Phone'];
		// $paid=$_POST['paid'];
		$TotalKillowat=$_POST['TotalKillowat'];
		// $TotalAmount=$_POST['TotalAmount'];
		// $RegDate=$_POST['RegDate'];
		$RegDate= date("d M Y ");
	
		mysqli_query($con, "update paid set  FullName= '$FullNames', Phone= '$Phone' , TotalKillowat='$TotalKillowat',  TotalAmount='$TotalAmount', paid='$paid',  rest='$rest', RegDate='$RegDate' where empid= $empid");

		echo "<script>alert('Paid Data Updated Successfully');</script>";
		header('location: Admin_Paid.php');
}

// For deleteing records
if (isset($_GET['delete'])) {
	$empid = $_GET['delete'];
	mysqli_query($con, "DELETE FROM paid WHERE empid=$empid");
	echo "<script>alert('paid Deleted Successfully');</script>";
	header('location: Admin_Paid.php');
}

?>