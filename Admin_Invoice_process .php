<?php
session_start();
include_once 'includes/db.php';

$FullName = "";
$Phone = "";
$Address = "";
$KillowatHore = "";
$KillowatHada = "";
$TotalKillowat = "";
$TotalAmount = "";
$RegDate = "";
$empid = 0;




if (isset($_POST['save'])) {

	$KillowatHore = $_POST['KillowatHore'];
    $KillowatHada = $_POST['KillowatHada'];
    $TotalKillowat = $KillowatHada - $KillowatHore;

	$KillowatHore = $_POST['KillowatHore'];
    $KillowatHada = $_POST['KillowatHada'];
	$Amount = 0.36;
    $TotalAmount = ($KillowatHada - $KillowatHore) * $Amount ;

	$FullName=$_POST['FullName'];
	$Phone=$_POST['Phone'];
	$Address=$_POST['Address'];
	// $KillowatHore=$_POST['KillowatHore'];
	// $KillowatHada=$_POST['KillowatHada'];
	// $TotalKillowat=$_POST['TotalKillowat'];
	// $TotalAmount=$_POST['TotalAmount'];
	$RegDate=$_POST['RegDate'];
	$dd= date("d M Y ");



	$sql= "insert into invoice ( FullName, Phone , Address , KillowatHore, KillowatHada, TotalKillowat , TotalAmount , RegDate) VALUES ( '$FullName', '$Phone' , '$Address' ,'$KillowatHore','$KillowatHada', '$TotalKillowat' , '$TotalAmount' ,'$RegDate')";
	if (mysqli_query($con, $sql)) { 
		echo "<script>alert('Invoice Registered Successfully');</script>";
		echo "<script>window.location.href='Admin_Invoice.php'</script>";
	} else {
		   mysqli_close($con);
		}
   
    }                    

// For updating records
	if (isset($_POST['update'])){

	$empid=$_POST['empid'];

	$KillowatHore = $_POST['KillowatHore'];
    $KillowatHada = $_POST['KillowatHada'];
    $TotalKillowat = $KillowatHada - $KillowatHore;

	$KillowatHore = $_POST['KillowatHore'];
    $KillowatHada = $_POST['KillowatHada'];
	$Amount = 0.36;
    $TotalAmount = ($KillowatHada - $KillowatHore) * $Amount ;

	$FullName=$_POST['FullName'];
	$Phone=$_POST['Phone'];
	$Address=$_POST['Address'];
	// $KillowatHore=$_POST['KillowatHore'];
	// $KillowatHada=$_POST['KillowatHada'];
	// $TotalKillowat=$_POST['TotalKillowat'];
	// $TotalAmount=$_POST['TotalAmount'];
	$RegDate=$_POST['RegDate'];

		mysqli_query($con, "update invoice set  FullName= '$FullName', Phone= '$Phone' , Address ='$Address', KillowatHore='$KillowatHore' , KillowatHada ='$KillowatHada', TotalKillowat='$TotalKillowat',  TotalAmount='$TotalAmount', RegDate='$RegDate' where empid= $empid");

		echo "<script>alert('Invoice Data Updated Successfully');</script>";
		header('location: Admin_Invoice.php');
}

// For deleteing records
if (isset($_GET['delete'])) {
	$empid = $_GET['delete'];
	mysqli_query($con, "DELETE FROM invoice WHERE empid=$empid");
	echo "<script>alert('Invoice Deleted Successfully');</script>";
	header('location: Admin_Invoice.php');
}

?>