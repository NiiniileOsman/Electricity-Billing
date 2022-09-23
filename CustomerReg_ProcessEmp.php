<?php
session_start();
include_once 'includes/db.php';

$FullName = "";
$Phone = "";
$Address = "";
$RegDate = "";
$empid = 0;




if (isset($_POST['save'])) {
	$FullName=$_POST['FullName'];
	$Phone=$_POST['Phone'];
	$Address=$_POST['Address'];
	$RegDate=$_POST['RegDate'];

	$sql= "insert into customer ( FullName, Phone, Address , RegDate) VALUES ( '$FullName', '$Phone', '$Address' ,'$RegDate')";
	if (mysqli_query($con, $sql)) { 
		echo "<script>alert('Customer Registered Successfully');</script>";
		echo "<script>window.location.href='CustomerReg_Emp.php'</script>";
	} else {
		   mysqli_close($con);
		}
   
    }                    

// For updating records
	if (isset($_POST['update'])){

		$empid=$_POST['empid'];
		$FullName=$_POST['FullName'];
		$Phone=$_POST['Phone'];
		$Address=$_POST['Address'];
		$RegDate=$_POST['RegDate'];

		mysqli_query($con, "update customer set  FullName= '$FullName' , Phone ='$Phone', Address='$Address', RegDate='$RegDate' where empid= $empid");

		echo "<script>alert('Customer Data Updated Successfully');</script>";
		header('location: CustomerReg_Emp.php');
}

// For deleteing records
if (isset($_GET['delete'])) {
	$empid = $_GET['delete'];
	mysqli_query($con, "DELETE FROM customer WHERE empid=$empid");
	echo "<script>alert('customer Deleted Successfully');</script>";
	header('location: CustomerReg_Emp.php');
}

?>