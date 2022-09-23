<?php
session_start();
include_once 'includes/db.php';

$FullName = "";
$UserName = "";
$Password = "";
$Email = "";
$Phone = "";
$Gendar = "";
$RegDate = "";
$empid = 0;




if (isset($_POST['save'])) {
	$FullName=$_POST['FullName'];
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Gendar=$_POST['Gendar'];
	$RegDate=$_POST['RegDate'];

	$sql= "insert into emp ( FullName, UserName , Password , Email, Phone, Gendar , RegDate) VALUES ( '$FullName', '$UserName' , '$Password' ,'$Email','$Phone', '$Gendar' ,'$RegDate')";
	if (mysqli_query($con, $sql)) { 
		echo "<script>alert('Emplooye Registered Successfully');</script>";
		echo "<script>window.location.href='EmplooyeReg.php'</script>";
	} else {
		   mysqli_close($con);
		}
   
    }                    

// For updating records
	if (isset($_POST['update'])){

		$empid=$_POST['empid'];
		$FullName=$_POST['FullName'];
		$UserName=$_POST['UserName'];
		$Password=$_POST['Password'];
		$CPassword=$_POST['CPassword'];
		$Email=$_POST['Email'];
		$Phone=$_POST['Phone'];
		$Gendar=$_POST['Gendar'];
		$RegDate=$_POST['RegDate'];

		mysqli_query($con, "update emp set  FullName= '$FullName', UserName= '$UserName' , Password ='$Password',Email='$Email' , Phone ='$Phone', Gendar='$Gendar', RegDate='$RegDate' where empid= $empid");

		echo "<script>alert('Emplooye Data Updated Successfully');</script>";
		header('location: EmplooyeReg.php');
}

// For deleteing records
if (isset($_GET['delete'])) {
	$empid = $_GET['delete'];
	mysqli_query($con, "DELETE FROM emp WHERE empid=$empid");
	echo "<script>alert('Emplooye Deleted Successfully');</script>";
	header('location: EmplooyeReg.php');
}

?>